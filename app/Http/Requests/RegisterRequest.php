<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'username' => 'required|unique:users,username|min:5',
      'email' => 'required|unique:users,email|email',
      'phone_number' => 'required|min:6|max:15',
      'password' => 'required|alpha_num|min:6|confirmed',
      'password_confirmation' => 'required'
    ];
  }
}