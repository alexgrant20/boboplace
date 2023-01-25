<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsLetterRequest;
use App\Models\NewsLetter;
use Illuminate\Support\Facades\Mail;

class GeneralController extends Controller
{
  public function storeNewLetter(NewsLetterRequest $request)
  {
    try {
      NewsLetter::create($request->validated());

      Mail::send('app.email.newsletter-email', ['name' => $request->name], function ($message) use ($request) {
        $message->to($request->email);
        $message->subject('boboplace Newsletter');
      });
    } catch (\Exception $e) {
      dd($e->getMessage());
    }

    return to_route('home')->with('success-swal', 'Successfully subscribed to our news letter');
  }
}