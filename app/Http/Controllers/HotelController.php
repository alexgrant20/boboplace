<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddHotelRequest;
use App\Models\City;
use App\Models\Facility;
use App\Models\File;
use App\Models\Hotel;
use App\Models\HotelFacility;
use Illuminate\Http\Request;

class HotelController extends Controller
{
   public function __construct()
   {
     $this->middleware('role:admin', ['only' => ['create', 'store', 'destroy']]);
     $this->middleware('auth', ['only' => ['show']]);
   }

   public function index(){
      //
   }

   public function create(){

      $facilities = Facility::all();
      $cities = City::all();

      return view('admin.addhotel', compact('facilities', 'cities'));
   }

   public function store(AddHotelRequest $request){

      //  dd($request);
      $imageName = $request->name . '-' . time() . '-' . $request->file('image')->getClientOriginalName();
      $fullPath = "/storage/hotel/{$imageName}";
      $request->image->storeAs('/public/hotel', $imageName);


      Hotel::create([
         'name' => $request->name,
         'rating' => 5,
         'price' => $request->price,
         'full_address' => $request->full_address,
         'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit excepturi tempora amet quaerat labore quod, quisquam vitae soluta dolorum magni.',
         'city_id' => $request->city,
         ]);

        $hotel = Hotel::latest()->first();

      File::create([
         'hotel_id' => $hotel->id,
         'path' => $fullPath
      ]);

      $facilities = Facility::all();

      foreach ($facilities as $facility) {
         if ($request->has($facility->id)) {
            HotelFacility::create([
               'hotel_id' => $hotel->id,
               'facility_id' => $facility->id
            ]);
      }
     }


     return redirect('/');
   }
}
