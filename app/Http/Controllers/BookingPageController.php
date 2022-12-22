<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingPageController extends Controller
{
  public function create()
  {
    return view('app.member.booking.index');
  }
}
