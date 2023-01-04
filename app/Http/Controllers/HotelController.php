<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddHotelRequest;
use App\Http\Requests\UpdateHotelFacilityRequest;
use App\Http\Requests\UpdateHotelRequest;
use App\Models\City;
use App\Models\Facility;
use App\Models\File;
use App\Models\Hotel;
use App\Models\HotelFacility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HotelController extends Controller
{
  public function __construct()
  {
    $this->middleware('role:admin', ['only' => ['create', 'store', 'destroy', 'edit']]);
  }

  public function show(Hotel $hotel)
  {
    $hotel->load('file', 'hotelFacility');
    return view('detail', compact('hotel'));
  }

  public function index()
  {
    return redirect('/');
  }

  public function create()
  {

    $facilities = Facility::all();
    $cities = City::all();

    return view('admin.addhotel', compact('facilities', 'cities'));
  }

  public function store(AddHotelRequest $request)
  {
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

  public function edit(Hotel $hotel)
  {

    $file = File::where('hotel_id', $hotel->id)->first();
    $path = $file->path;
    $cities = City::all();
    $cityName = DB::table('hotels as ht')
      ->join('cities as ct', 'ht.city_id', '=', 'ct.id')
      ->where('ht.id', $hotel->id)
      ->select('ct.name')
      ->first();

    $facilities = Facility::all();
    $facilityHotel = DB::table('hotels as ht')
      ->join('hotel_facilities as hf', 'ht.id', '=', 'hf.hotel_id')
      ->where('ht.id', $hotel->id)
      ->select('hf.facility_id')
      ->get();

    return view('admin.edithotel', compact('hotel', 'path', 'cities', 'cityName', 'facilities', 'facilityHotel'))->with('success-swal', 'berhasil');
  }

  public function update(UpdateHotelRequest $request, Hotel $hotel)
  {

    $hotelUpdated = $request->safe()->toArray();
    $hotel->update($hotelUpdated);

    HotelFacility::where('hotel_id', $hotel->id)->delete();

    $facilities = Facility::all();

    foreach ($facilities as $facility) {
      if ($request->has($facility->id)) {
        HotelFacility::Create([
          'hotel_id' => $hotel->id,
          'facility_id' => $facility->id
        ]);
      }
    }

    return to_route('hotel.show', $hotel->id)->with('success-swal', 'Hotel updated');
  }


  public function destroy(Hotel $hotel)
  {
    HotelFacility::where('hotel_id', $hotel->id)->delete();
    $hotel->delete();

    return to_route('home')->with('success-swal', 'Hotel Deleted');
  }
}
