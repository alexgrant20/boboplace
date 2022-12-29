<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddHotelRequest;
use App\Models\City;
use App\Models\Facility;
use App\Models\File;
use App\Models\Hotel;
use App\Models\HotelFacility;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HotelController extends Controller
{
   public function __construct()
   {
     $this->middleware('role:admin', ['only' => ['create', 'store', 'destroy', 'edit']]);
     $this->middleware('auth', ['only' => ['show']]);
   }

   public function index(){
      return redirect('/');
   }

   public function create(){

      $facilities = Facility::all();
      $cities = City::all();

      return view('admin.addhotel', compact('facilities', 'cities'));
   }

   public function store(AddHotelRequest $request){

      //   dd($request);

        Hotel::create([
         'name' => $request->name,
         'rating' => $request->rating,
         'price' => $request->price,
         'full_address' => $request->full_address,
         'description' => $request->description,
         'city_id' => $request->city,
         ]);

        $hotel = Hotel::latest()->first();

         foreach ($request->file('image') as $req) {
            // dd($req);
         $imageName = Str::random(5) . '-' . time() . '-' . $req->getClientOriginalName();
         $fullPath = "/storage/hotel/{$imageName}";
         $req->storeAs('/public/hotel', $imageName);

         File::create([
            'hotel_id' => $hotel->id,
            'path' => $fullPath
         ]);
      }

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

   public function edit(Hotel $hotel){

      $file = File::where('hotel_id', $hotel->id)->first();
      // dd($file);
      $path = $file->path;

      return view('admin.edithotel', compact('hotel', 'path'));
   }

   public function destroy(Hotel $hotel){

      // dd($hotel);

      HotelFacility::where('hotel_id', $hotel->id)->delete();

      $hotel->delete();

      return redirect('/');
   }
}
