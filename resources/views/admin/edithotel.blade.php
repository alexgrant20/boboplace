{{-- {{dd($facilityHotel)}} --}}


{{-- {{dd($hotel)}}
   <img src="{{$path}}" alt="sss"> --}}


@extends('layout.user')

   @section('title')
       Edit Hotel
   @endsection

   @section('content')

   <div class="p-3">
      <div class="card" style="width: 100%; border-radius: 1em; background-color: #758C83">
         <div class="container">
            <form action="{{ route('hotel.update', ['hotel' => $hotel])}}" method="POST" class="mb-3">
               @csrf
               @method('put')
               <div class="row">
                     <div class="col">
                        <div class="d-flex justify-content-center align-items-center" style="border-radius: 1em; height: 100%;">

                         <label for="firstimg">
                           <img src="{{$path}}" width="420px" height="350px" style="cursor: pointer;" id="display-image">
                         </label>
                        </div>
                     </div>

                     <div class="col-7 mt-3">
                        <div class="mb-3">
                           <label for="hotelname" class="form-label text-white">Hotel Name</label>
                           <input type="text" class="form-control" value="{{$hotel->name}}" class="text-black" id="hotelname" name="name">
                           @error('name')
                                 <div>
                                    {{$message}}
                                 </div>
                              @enderror
                        </div>

                        <div class="mb-3">
                           <label for="description" class="form-label text-white">Description</label>
                           <textarea rows="5" class="form-control" class="text-black" id="description" name="description"> {{$hotel->description}} </textarea>
                           @error('description')
                                 <div>
                                    {{$message}}
                                 </div>
                              @enderror
                        </div>


                        <div class="form-group mb-3">
                           <label for="city" class="col-sm-2 control-label text-white">City</label>
                           <div class="col">
                              <select class="form-select" id="city" name="city" style="border-radius: 10px">
                                 <option value="{{$hotel->city_id}}"> {{$cityName->name}} </option>
                                 @foreach ($cities as $city)
                                    @if ($hotel->city_id == $city->id )
                                       @continue;
                                    @endif
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                 @endforeach
                              </select>
                              @error('city')
                                 <div>
                                    {{$message}}
                                 </div>
                              @enderror
                           </div>
                        </div>

                        <div class="mb-3">
                           <label for="address" class="form-label text-white">Address</label>
                           <input type="text" class="form-control" value="{{$hotel->full_address}}" id="address" name="full_address">
                           @error('address')
                                 <div>
                                    {{$message}}
                                 </div>
                              @enderror
                        </div>
                        <div class="mb-3">
                           <label for="price" class="form-label text-white">Price</label>
                           <input type="number" class="form-control" value="{{$hotel->price}}" id="price" name="price">
                           @error('price')
                                 <div>
                                    {{$message}}
                                 </div>
                              @enderror
                        </div>

                        <div class="form-group mb-3">
                           <label for="rating" class="col-sm-2 control-label text-white">Rating</label>
                           <div class="col">
                              <select class="form-select" id="rating" name="rating" style="border-radius: 10px">
                                 <option value=" {{$hotel->rating}} ">
                                    @for ($i = 1; $i <= $hotel->rating; $i++)
                                       ⭐
                                    @endfor
                                 </option>
                                 @for ($i = 1; $i <= 5; $i++)
                                    @if ($i == $hotel->rating)
                                          @continue
                                    @endif
                                    <option value="{{ $i }}">
                                       @for ($j = 1; $j <= $i; $j++)
                                          ⭐
                                       @endfor
                                    </option>
                                 @endfor
                              </select>
                              @error('rating')
                                 <div>
                                    {{$message}}
                                 </div>
                              @enderror
                           </div>
                        </div>

                        <div class="mb-3">
                           <label for="address" class="form-label text-white">Facilities</label>
                           <br>
                           <div class="row">
                              <div class="col-12">
                                 @foreach ($facilities as $facility)
                                    <div class="d-inline-flex align-items-center gap-2 me-3">
                                       @if (in_array($facility->id, $facilityHotel->pluck('facility_id')->toArray()))
                                          <input class="form-check-input mt-0" type="checkbox" id="inlineCheckbox1" name="{{$facility->id}}" value="1" checked>
                                       @else
                                          <input class="form-check-input mt-0" type="checkbox" id="inlineCheckbox1" name="{{$facility->id}}" value="1">
                                       @endif
                                       <label class="form-check-label text-white" for="inlineCheckbox1"> {{$facility->name}} </label>
                                    </div>
                                 @endforeach
                              </div>
                           </div>
                        <div class="d-grid">
                           <button type="submit" class="btn btn-warning text-black mt-2">Save</button>
                        </div>
                     </form>
               </div>
            </div>
         </div>
      </div>
   </div>

   @endsection
