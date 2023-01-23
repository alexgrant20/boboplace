<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookTransactionRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'total_children' => 'required|integer',
      'total_adult' => 'required|integer',
      'check_in' => 'required|before:check_out|date',
      'check_out' => 'required|after:check_in|date',
    ];
  }
}