@extends('layout.user')

@section('title')
   Register
@endsection

@section('content')
   <div class="bg-white d-flex flex-column align-items-center p-5">
      <div class="text-white bg-dark p-5 border-dark" style="border-radius: 50px">
         @if (session('success'))
            <h1>{{ session('success') }}</h1>
         @endif
         <form action="/regValid" method="POST">
            @csrf
            <div class="d-flex">
               <h5>Hello, Welcome to BoboPlace Registration page!</h5>
            </div>
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
            <div>
               <label for="">Password</label>
               <input class="form-control" type="password" id="password" name="password"
                  placeholder="Enter your password">
            </div>
            @error('password')
               <div class="alert alert-danger" role="alert">
                  {{ $message }}
               </div>
            @enderror
            <div>
               <label for="">Confirm Password</label>
               <input class="form-control" type="password" id="password_confirmation" name="password_confirmation"
                  placeholder="Enter your confirm password">
            </div>
            @error('password_confirmation')
               <div class="alert alert-danger" role="alert">
                  {{ $message }}
               </div>
            @enderror
            <br>
            <button class="btn btn-success btn-l btn-block" type="submit">Register</button>
         </form>
         <div class="text-white">Already have an account? <a href="{{ url('/login') }}"
               class="text-success text-decoration-none">Login now!</a></div>
      </div>
   </div>
@endsection
