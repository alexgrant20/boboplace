<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHotelRequest extends FormRequest
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
         'name' => 'required|between:5,20',
         'city' => 'required',
         'rating' => 'required|integer',
         'full_address' => 'required|min:5',
         'description' => 'required|min:5',
         'price' => 'required|integer|gte:100000'
        ];
    }
}
