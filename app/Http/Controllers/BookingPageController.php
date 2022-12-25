<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class BookingPageController extends Controller
{
   public function edit(Transaction $transaction)
   {
      return view('app.member.booking.index', compact('transaction'));
   }

   public function update(Request $request, Transaction $transaction)
   {
      // $request->validate();

      $transaction->update([
         'name' => $request->name,
         'phone_number' => $request->phone_number,
         'email' => $request->email,
         'identity_number' => $request->identity_number
      ]);

      dd($request);
   }
}