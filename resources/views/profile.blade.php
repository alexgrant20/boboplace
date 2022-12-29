@extends('layout.user')

@section('title')
   Profile
@endsection

@section('content')
   <div class="d-flex justify-content-between align-items-center" >
      <div class="text-white ps-4 pe-4 pt-3 pb-3 border-dark" style="display: flex; background-color: rgba(117, 140, 131, 1);border-radius: 10px; width: 100%">
         <div style="margin: 20px; margin-right: 20px">
            @if ($user->profile_picture != null)
               <img class="rounded rounded-5" style="width: 100px; height: 100px;" src="/storage/{{$user->profile_picture}}" data-bs-toggle="modal" data-bs-target="#staticBackdrop" alt="">
            @else
               <img style="width: 100px; margin-bottom: 10px;" src="/images/person-circle.svg" data-bs-toggle="modal" data-bs-target="#staticBackdrop" alt="">
            @endif
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content" style="background-color: #3B5D50">
                  <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Profile</h1>
                  <button type="button" class="btn-close" style="background-color: grey" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="/update-profile-image/{{$user->id}}" method="POST" enctype="multipart/form-data">
                     @method('patch')
                     @csrf
                     <div class="modal-body">
                        <input class="w-100"type="file" name="profile_picture" id="profile_picture" placeholder="Profile">
                        <p class="mt-3" style="color: white">Please upload your profile picture</p>
                     </div>
                     @error('profile_picture')
                     <div class="alert alert-danger" role="alert">
                        {{$message}}
                     </div>
                     @enderror
                     <input type="hidden" value="{{$user->profile_picture}}" name="oldProfile" id="oldProfile">
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Save Changes</button>
                     </div>
                   </form>
               </div>
               </div>
           </div>
         </div>
         <div style="width: 100%; margin-left: 20px">
            <form method="POST" action="/updated-profile">
               @method('patch')
               @csrf
               <div class="">
                  <label for="">Username</label>
                  <input class="form-control" type="text" id="username" name="username" placeholder="Enter your username" value="{{$user->username}}">
               </div>
               @error('username')
                  <div class="alert alert-danger" role="alert">
                     {{ $message }}
                  </div>
               @enderror
               <div>
                  <label for="">Email</label>
                  <input class="form-control" type="text" id="email" name="email" placeholder="Enter your email" value="{{$user->email}}">
               </div>
               @error('email')
                  <div class="alert alert-danger" role="alert">
                     {{ $message }}
                  </div>
               @enderror
               <div>
                  <label for="">Phone Number</label>
                  <input class="form-control" type="text" id="phone_number" name="phone_number" placeholder="Enter your phone number" value="{{$user->phone_number}}">
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
   </div>
@endsection
