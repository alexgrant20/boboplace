@extends('layout.user')

@section('title')
   Profile
@endsection

@section('content')
   <div class="d-flex justify-content-between align-items-center" >
      <div class="text-white ps-4 pe-4 pt-3 pb-3 border-dark" style="background-color: rgba(117, 140, 131, 1);border-radius: 10px; width: 100%">
         <img style="filter:contrast(0%); width: 80px" src="/images/person-circle.svg" data-bs-toggle="modal" data-bs-target="#staticBackdrop" alt="">
         <form action="" method="POST">
            @csrf
            <div class="">
               <label for="">Username</label>
               <input class="form-control" type="text" id="username" name="username" placeholder="Enter your username">
            </div>
            @error('username')
               <div class="alert alert-danger" role="alert">
                  {{ $message }}
               </div>
            @enderror
            <div>
               <label for="">Email</label>
               <input class="form-control" type="text" id="email" name="email" placeholder="Enter your email">
            </div>
            @error('email')
               <div class="alert alert-danger" role="alert">
                  {{ $message }}
               </div>
            @enderror
            <div>
               <label for="">Phone Number</label>
               <input class="form-control" type="text" id="phone_number" name="phone_number"
                  placeholder="Enter your phone number">
            </div>
            @error('phone_number')
               <div class="alert alert-danger" role="alert">
                  {{ $message }}
               </div>
            @enderror
            <br>
            <button class="btn btn-warning form-control" type="submit"><b>Save</b></button>
         </form>
      </div>
   </div>
@endsection
