@extends('layout.user')

@section('title')
  Login
@endsection

@section('content')
<div class="bg-white d-flex flex-column align-items-center p-5" style="height: 500px">
    <div class="text-white bg-dark p-5 border-dark" style="border-radius: 50px">
        <form action="/logValid" method="POST" >
            @csrf
            <div class="d-flex">
                <h4>Hello, Welcome back to BoboPlace</h4>
            </div>
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
            <button class="btn btn-success btn-l btn-block" type="submit">Login</button>
        </form>
    
        <div class="text-white">Don't have an account? <a href="{{url('/register')}}" class="text-success text-decoration-none">Register now!</a></div>
    </div>
</div>
@endsection
