<?php

namespace App\Http\Controllers;

use App\Models\PaymentType;
use App\Models\Transaction;
use Illuminate\Http\Request;
use PDF;

class BookingPageController extends Controller
{
   public function edit(Transaction $transaction)
   {
      return view('app.member.booking.index', compact('transaction'));
   }

   public function update(Request $request, Transaction $transaction)
   {
      $request->validate([
         'name' => 'required',
         'phone_number' => 'required',
         'email' => 'required|email',
         'identity_number' => 'required'
      ]);

      try {
         $transaction->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'identity_number' => $request->identity_number
         ]);
      } catch (\Exception) {
         return response()->json([
            'status' => 400,
         ]);
      }

      return response()->json([
         'status' => 200,
         'name' => $request->name,
         'phone_number' => $request->phone_number,
         'email' => $request->email,
      ]);
   }

   public function finalize(Request $request, Transaction $transaction)
   {
      $price = $transaction->hotel->price;
      $tax = $price * 0.1;
      $totalPrice = $price + $tax;

      $paymentType = PaymentType::where('name', $request->payment_type)->first();

      try {
         $transaction->update([
            'total_payment' => $totalPrice,
            'status_id' => 2,
            'payment_type_id' => $paymentType->id,
         ]);
      } catch (\Exception) {
         return response()->json([
            'status' => 400
         ]);
      }

      return response()->json([
         'status' => 200,
      ]);
   }

   public function pdfview(Request $request)
   {
      // $pdf = PDF::loadView('pdfview');
      // return $pdf->download('pdfview.pdf');
      // $items = DB::table("items")->get();
      // view()->share('items', $items);
      // if ($request->has('download')) {
      //    $pdf = PDF::loadView('pdfview');
      // }
      // return view('pdfview');
   }
}