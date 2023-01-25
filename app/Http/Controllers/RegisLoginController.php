<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RegisLoginController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth', ['only' => ['logout', 'update', 'editProfile', 'edit', 'dashboard']]);
    $this->middleware('guest', ['only' => ['index', 'logValid', 'register', 'regValid', 'create', 'verifyAccount']]);
  }

  public function index()
  {
    return view('auth.login');
  }

  public function logValid(Request $request)
  {
    $request->validate([
      'email' => 'required',
      'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials, $request->input('remember') != null ? true : false)) {

      $user = User::where('email', 'like', $credentials[('email')])->first();

      if ($user->is_email_verified) {
        return redirect()->intended('/');
      } else {
        $request->session()->flush();
        Auth::logout();
        return redirect("/login")->withSuccess('Oops! You need to verified your email first');
      }
    }
    return redirect("/login")->withSuccess('Oops! You have entered invalid credentials');
  }

  public function register()
  {
    return view('auth.register');
  }

  public function regValid(RegisterRequest $request)
  {
    $data = $request->validated();
    $data['role_id'] = Role::where('name', 'member')->first()->id;

    $createUser = $this->create($data);

    $token = Str::random(64);

    UserVerify::create([
      'user_id' => $createUser->id,
      'token' => $token
    ]);

    Mail::send('app.email.emailVerificationEmail', ['token' => $token], function ($message) use ($request) {
      $message->to($request->email);
      $message->subject('boboPlace Email Verification');
    });
    return redirect('/login')->withSuccess('You Have Successfully Registered your account');
  }

  public function create(array $data)
  {
    return User::create([
      'username' => $data['username'],
      'email' => $data['email'],
      'phone_number' => $data['phone_number'],
      'password' => Hash::make($data['password']),
      'role_id' => $data['role_id'],
    ]);
  }

  public function logout(Request $request)
  {
    $request->session()->flush();
    Auth::logout();

    return redirect('/login');
  }

  public function verifyAccount($token)
  {
    $verifyUser = UserVerify::where('token', 'like', $token)->first();

    $message = "Sorry yor email can't be identified.";

    if (!is_null($verifyUser)) {
      $user = $verifyUser->user;

      if (!$user->is_email_verified) {
        $verifyUser->user->is_email_verified = now();
        $verifyUser->user->save();
        $message = "Your email is verified. You can now login.";
      } else {
        $message = "Your email is already verified. You can now login.";
      }
    }
    return redirect('/login')->withSuccess($message);
  }

  public function editProfile(Request $request, $id)
  {
    $request->validate([
      'profile_picture' => 'required|file|image'
    ]);

    if ($request->file('profile_picture')) {
      if ($request->oldProfile) {
        Storage::disk('public')->delete($request->oldProfile);
      }
      User::where('id', 'like', $id)->update([
        'profile_picture' => $request->file('profile_picture')->store('profile', 'public')
      ]);
    }
    return redirect('/')->with('success-swal', 'Profile Updated');
  }

  public function edit($id)
  {
    $user = User::where('id', 'like', Auth::id())->first();
    return view('auth.profile', compact('user'));
  }

  public function update(Request $request)
  {
    $request->validate([
      'username' => 'required',
      'email' => 'required|email',
      'phone_number' => 'required|min:5|max:13'
    ]);

    User::where('id', 'like', Auth::user()->id)->update([
      'username' => $request->username,
      'email' => $request->email,
      'phone_number' => $request->phone_number
    ]);
    return redirect('/')->with('success-swal', 'Profile Updated');
  }
}
