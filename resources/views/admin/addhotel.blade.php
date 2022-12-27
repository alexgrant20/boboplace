@extends('layout.user')

@section('title')
    Add Hotel
@endsection

@section('content')

<div class="p-3">
   <div class="card" style="width: 100%; border-radius: 1em; background-color: #758C83">
      <div class="container">

         <div class="row">

            <div class="col">
               <div class="mb-4 mt-5 d-flex justify-content-center" style="border-radius: 1em">
                  <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                  alt="example placeholder" style="width: 420px; height: 350px;" class="rounded" />
              </div>
              <div class="d-flex justify-content-center">
                  <div class="btn btn-primary btn-rounded mb-3">
                      <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                      <input type="file" class="form-control d-none" id="customFile1" />
                  </div>
              </div>
            </div>

            <div class="col-7 mt-3">

                  <form action="" method="POST" class="mb-3">
                     @csrf
                     <div class="mb-3">
                        <label for="hotelname" class="form-label text-white">Hotel Name</label>
                        <input type="text" class="form-control" placeholder="Enter Hotel Name" class="text-black" id="hotelname" name="hotelname">
                     </div>
                     <div class="form-group mb-3">
                        <label for="city" class="col-sm-2 control-label text-white">City</label>
                        <div class="col">
                           <select class="form-control" id="city" name="city">
                              <option value="">Select City</option>
                              <option value="AK">Alaska</option>
                              <option value="AL">Alabama</option>
                              <option value="AR">Arkansas</option>
                              <option value="AZ">Arizona</option>
                              <option value="CA">California</option>
                              <option value="CO">Colorado</option>
                              <option value="CT">Connecticut</option>
                              <option value="DC">District of Columbia</option>
                              <option value="DE">Delaware</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="HI">Hawaii</option>
                              <option value="IA">Iowa</option>
                              <option value="ID">Idaho</option>
                              <option value="IL">Illinois</option>
                              <option value="IN">Indiana</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MD">Maryland</option>
                              <option value="ME">Maine</option>
                              <option value="MI">Michigan</option>
                              <option value="MN">Minnesota</option>
                              <option value="MO">Missouri</option>
                              <option value="MS">Mississippi</option>
                              <option value="MT">Montana</option>
                              <option value="NC">North Carolina</option>
                              <option value="ND">North Dakota</option>
                              <option value="NE">Nebraska</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NM">New Mexico</option>
                              <option value="NV">Nevada</option>
                              <option value="NY">New York</option>
                              <option value="OH">Ohio</option>
                              <option value="OK">Oklahoma</option>
                              <option value="OR">Oregon</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="PR">Puerto Rico</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SC">South Carolina</option>
                              <option value="SD">South Dakota</option>
                              <option value="TN">Tennessee</option>
                              <option value="TX">Texas</option>
                              <option value="UT">Utah</option>
                              <option value="VA">Virginia</option>
                              <option value="VT">Vermont</option>
                              <option value="WA">Washington</option>
                              <option value="WI">Wisconsin</option>
                              <option value="WV">West Virginia</option>
                              <option value="WY">Wyoming</option>
                           </select>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label for="address" class="form-label text-white">Address</label>
                        <input type="text" class="form-control" placeholder="Enter Hotel Full Address" id="address" name="address">
                     </div>
                     <div class="mb-3">
                        <label for="price" class="form-label text-white">Price</label>
                        <input type="number" class="form-control" placeholder="Enter Hotel Price" id="price" name="price">
                     </div>
                     <div class="mb-3">
                        <label for="address" class="form-label text-white">Facilities</label>
                        <br>
                        <div class="row">
                           <div class="col-12">
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                 <label class="form-check-label text-white" for="inlineCheckbox1">Free Wifi</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                 <label class="form-check-label text-white" for="inlineCheckbox2">Taxi Driver</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                 <label class="form-check-label text-white" for="inlineCheckbox1">Free Wifi</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                 <label class="form-check-label text-white" for="inlineCheckbox2">Taxi Driver</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                 <label class="form-check-label text-white" for="inlineCheckbox1">Free Wifi</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                 <label class="form-check-label text-white" for="inlineCheckbox2">Taxi Driver</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                 <label class="form-check-label text-white" for="inlineCheckbox1">Free Wifi</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                 <label class="form-check-label text-white" for="inlineCheckbox2">Taxi Driver</label>
                              </div>
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
