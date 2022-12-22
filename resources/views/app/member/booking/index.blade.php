@extends('layout.user')

@section('title', 'Booking Page')

@section('content')
   <h1>Form</h1>
   <form action="">
      <div class="row gx-4 gy-2">
         <div class="col-md-8">
            <div class="card mb-3" style="background-color: rgba(255,250,217,255)">
               <div class="card-header text-uppercase">You need to know</div>
               <div class="card-body">
                  <h5 class="card-title">Please read before you book</h5>
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius culpa quia cumque
                     dignissimos consequatur sint tenetur, dolore architecto rem iusto fugit voluptate nobis harum eos nisi
                     cupiditate non voluptatum accusantium id. Distinctio, possimus? Itaque nemo, placeat praesentium, fuga
                     enim accusantium dolorem eaque quasi perferendis quod veniam adipisci, deserunt non dolorum.</p>
               </div>
            </div>
            <div class="card">
               <div class="card-body">
                  <div class="row mb-2 g-2">
                     <div class="col-md">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="firstName" id="firstName" class="form-control form-control-lg">
                     </div>
                     <div class="col-md">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="lastName" id="lastName" class="form-control form-control-lg">
                     </div>
                  </div>
                  <div class="mb-2">
                     <label class="form-label">Phone Number</label>
                     <div class="row">
                        <div class="col-md-3">
                           <select name="prefix_phone_number" id="" class="form-control h-100">
                              <option value="62">+62</option>
                           </select>
                        </div>
                        <div class="col-md-9">
                           <input type="text" name="phone_number" id="phone_number"
                              class="form-control form-control-lg">
                        </div>
                     </div>
                  </div>
                  <div class="row g-3 mb-2">
                     <div class="col-md">
                        <label for="identity_number" class="form-label">Identity Number</label>
                        <input type="text" name="identity_number" id="identity_number"
                           class="form-control form-control-lg">
                     </div>
                     <div class="col-md">
                        <label for="scan_identity" class="form-label">Scan Identity</label>
                        <input class="form-control form-control-lg" type="file" id="scan_identity">
                     </div>
                  </div>
               </div>
            </div>
            <div class="mt-5 text-end">
               <button class="btn btn-success">Accept</button>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex align-items-center gap-1 mb-3">
                     <i class="bi bi-building fs-4 text-primary"></i>
                     <span class="fs-5" style="font-weight: 500">Hotel Mariguna</span>
                  </div>
                  <div class="mb-3">
                     <label for="booking_date">Booking Date</label>
                     <input type="text" name="date" id="booking_date" class="daterange form-control mb-3"
                        value="01/01/2018 - 01/15/2018" disabled>
                  </div>
                  <div class="row">
                     <div class="col-md-5">
                        <img class="img-responsive w-100 h-100"
                           src="https://www.ahstatic.com/photos/5451_ho_00_p_1024x768.jpg" alt="">
                     </div>
                     <div class="col-md-7">
                        <div class="d-flex gap-3 mb-3">
                           <div class="d-flex align-items-center gap-2">
                              <i class="fa-solid fa-baby fs-5"></i>
                              <div>
                                 3 Orang
                              </div>
                           </div>
                           <div class="d-flex align-items-center gap-2">
                              <i class="fa-solid fa-person fs-5"></i>
                              <div>
                                 3 Orang
                              </div>
                           </div>
                        </div>
                        <h2 class="fs-6 text-uppercase border-bottom pb-1">Misc</h2>
                        <div class="d-flex gap-1 align-items-center">
                           <i class="fa-solid fa-wifi text-success"></i>
                           <span>Free Wi-fi</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
@endsection

@section('js-head')
   <script>
      $(function() {
         $('.daterange').daterangepicker();
      });
   </script>
@endsection
