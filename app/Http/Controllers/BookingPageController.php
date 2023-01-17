<?php

namespace App\Http\Controllers;

use App\Models\PaymentType;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BookingPageController extends Controller
{
   public function edit(Transaction $transaction)
   {
      if ($transaction->payment_type_id) abort(404);
      if ($transaction->user_id !== auth()->user()->id) abort(401);

      return view('app.member.booking.index', compact('transaction'));
   }

   public function store(Request $request)
   {
      $date = explode('-', $request->datetimes);

      $checkInDate = date('Y-m-d', strtotime($date[0]));
      $checkOutDate = date('Y-m-d', strtotime($date[1]));

      $transaction = Transaction::create([
         'user_id' => Auth::id(),
         'checkin_date' => $checkInDate,
         'checkout_date' => $checkOutDate,
         'hotel_id' => $request->hotel_id,
         'status_id' => 1,
         'transaction_date' => now(),
         'total_adult' => $request->total_adult,
         'total_children' => $request->total_children,
      ]);

      return to_route('booking.edit', $transaction->id);
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
            'identity_number' => $request->identity_number,
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
      $totalDay = (strtotime($transaction->checkout_date) - strtotime($transaction->checkin_date)) / 86400;
      $price = $transaction->hotel->price * $totalDay;
      $tax = $price * 0.1;

      $totalPrice = $price + $tax;

      $paymentType = PaymentType::where('name', $request->payment_type)->first();

      $ticketNumber = 'BOBO' . Str::random(20) . time();

      try {
         $transaction = tap($transaction)->update([
            'total_price' => $totalPrice,
            'status_id' => 2,
            'payment_type_id' => $paymentType->id,
            'ticket_number' => $ticketNumber,
         ])->load('hotel');
      } catch (\Exception) {
         return response()->json([
            'status' => 400
         ]);
      }

      Session::put('transaction', $transaction->toArray());

      return response()->json([
         'status' => 200,
      ]);
   }

   public function printTicket()
   {
      $transaction = Session::get('transaction');
      $pdf = \PDF::loadView('app.pdf.e-ticket', compact('transaction'));
      $name = $transaction['ticket_number'] . '.pdf';
      $fullName = 'e-ticket/' . $name;
      $content = $pdf->download()->getOriginalContent();
      Storage::put('public/' . $fullName, $content);

      Transaction::find($transaction['id'])->update(['ticket' => 'storage/' . $fullName]);

      return to_route('booking.history')->with('success-swal', 'Transaction success');
   }

   public function history()
   {
      $bookingTransaction = Transaction::where('user_id', Auth::id())->with('hotel.file')->get();
      return view('booking_history', compact('bookingTransaction'));
   }
}