<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsLetterRequest;
use App\Models\NewsLetter;

class GeneralController extends Controller
{
  public function storeNewLetter(NewsLetterRequest $request)
  {
    NewsLetter::create($request->validated());

    return to_route('home')->with('success-swal', 'Successfully subscribed to our news letter');
  }
}
