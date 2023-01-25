@extends('layout.user')

@section('title')
  Register
@endsection

@section('content')
  <div class="d-flex justify-content-between align-items-center p-5">
    <div>
      <div style="width: 700px">
        <h4>Hello, Welcome to BoboPlace Registration page!</h4>
      </div>
      <div>
        <img src="/images/regis_login/regis.png" alt="" style="width: 650px">
      </div>
    </div>
    <div class="text-white ps-4 pe-4 pt-3 pb-3 border-dark"
      style="background-color: rgba(117, 140, 131, 1);border-radius: 10px; width: 600px;">
      @if (session('success'))
        <h1>{{ session('success') }}</h1>
      @endif
      <form action="/regValid" method="POST">
        @csrf
        <div class="">
          <label for="">Username</label>
          <input class="form-control" type="text" id="username" name="username" placeholder="Enter your username">
        </div>
        <div>
          <label for="">Email</label>
          <input class="form-control" type="text" id="email" name="email" placeholder="Enter your email">
        </div>
        <div>
          <label for="">Phone Number</label>
          <input class="form-control" type="text" id="phone_number" name="phone_number"
            placeholder="Enter your phone number">
        </div>
        <div>
          <label for="">Password</label>
          <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        <div>
          <label for="">Confirm Password</label>
          <input class="form-control" type="password" id="password_confirmation" name="password_confirmation"
            placeholder="Enter your confirm password">
        </div>
        <br>
        <button class="btn btn-warning form-control" type="submit"><b>Register</b></button>
      </form>
      <div class="text-white">Already have an account? <a href="{{ url('/login') }}"
          class="text-warning text-decoration-none">Login now!</a></div>
    </div>
  </div>
@endsection
