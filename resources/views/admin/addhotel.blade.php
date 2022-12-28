@extends('layout.user')

@section('title')
    Add Hotel
@endsection

@section('content')

<div class="p-3">
   <div class="card" style="width: 100%; border-radius: 1em; background-color: #758C83">
      <div class="container">
         <form action="{{ route('hotel.store')}}" method="POST" class="mb-3" enctype="multipart/form-data">
            @csrf
            <div class="row">
                  <div class="col">
                     <div class="mb-4 mt-5 d-flex justify-content-center" style="border-radius: 1em">
                        <img id="preview" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                        alt="Image Preview" style="width: 420px; height: 350px;" class="rounded" />
                  </div>
                  <div class="d-flex justify-content-center">
                        <div class="btn btn-primary btn-rounded mb-3">
                           <label class="form-label text-white m-1" for="image">Choose file</label>
                           <input type="file" class="form-control d-none" name="image[]" id="image" multiple onchange="previewImage(this)"/>
                           @error('image')
                              <div>
                                 {{$message}}
                              </div>
                           @enderror
                        </div>
                  </div>
                  </div>

                  <div class="col-7 mt-3">
                     <div class="mb-3">
                        <label for="hotelname" class="form-label text-white">Hotel Name</label>
                        <input type="text" class="form-control" placeholder="Enter Hotel Name" class="text-black" id="hotelname" name="name">
                        @error('name')
                              <div>
                                 {{$message}}
                              </div>
                           @enderror
                     </div>
                     <div class="form-group mb-3">
                        <label for="city" class="col-sm-2 control-label text-white">City</label>
                        <div class="col">
                           <select class="form-control" id="city" name="city">
                              <option value="0">Select City</option>
                              @foreach ($cities as $city)
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
                        <input type="text" class="form-control" placeholder="Enter Hotel Full Address" id="address" name="full_address">
                        @error('address')
                              <div>
                                 {{$message}}
                              </div>
                           @enderror
                     </div>
                     <div class="mb-3">
                        <label for="price" class="form-label text-white">Price</label>
                        <input type="number" class="form-control" placeholder="Enter Hotel Price" id="price" name="price">
                        @error('price')
                              <div>
                                 {{$message}}
                              </div>
                           @enderror
                     </div>
                     <div class="mb-3">
                        <label for="address" class="form-label text-white">Facilities</label>
                        <br>
                        <div class="row">
                           <div class="col-12">
                              @foreach ($facilities as $facility)
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="{{$facility->id}}" value="1">
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

<script>
   function previewImage(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();
           reader.onload = function(e) {
               $('#preview').attr('src', e.target.result).show();
           }
           reader.readAsDataURL(input.files[0]);
       }
   }
   </script>
