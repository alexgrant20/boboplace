<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddHotelRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      // 'image' => 'required|image',
      // 'image.*' => 'required|image|mimes:png,jpg,jpeg',
      'name' => 'required|between:5,20',
      'city' => 'required',
      'rating' => 'required|integer',
      'full_address' => 'required|min:5',
      'description' => 'required|min:5',
      'price' => 'required|integer|gte:100000'
    ];
  }
}