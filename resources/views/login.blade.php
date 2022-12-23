@extends('layout.user')

@section('title')
  Login
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center p-5" >
        <div style="width: 700px">
           <div class="">
               <h4>Hello, Welcome back to BoboPlace!</h4>
           </div>
           <div>
              <img src="/images/regis_login/login.png" alt="" style="width: 600px">
           </div>
       </div>
        <div class="text-white ps-4 pe-4 pt-3 pb-3 border-dark" style="background-color: rgba(117, 140, 131, 1);border-radius: 10px; width: 600px;">
        <form action="/logValid" method="POST" >
            @csrf
            @if (session('success'))
                <h5 class="text-success">{{session('success')}}</h5>
            @endif
            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" type="text" id="email" name="email" placeholder="Enter your email">
            </div>
            @error('email')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            <div>
                <label for="">Password</label>
                <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            @error('password')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            <div> 
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
            <button class="btn btn-warning form-control" type="submit"><b>Login</b></button>
        </form>
    
        <div class="text-white">Don't have an account? <a href="{{url('/register')}}" class="text-warning text-decoration-none">Register now!</a></div>
    </div>
@endsection
