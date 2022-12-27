<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
   public function __construct()
   {
     $this->middleware('role:admin', ['only' => ['create', 'store', 'destroy']]);
     $this->middleware('auth', ['only' => ['show']]);
   }

   public function index(){
      //
   }

   public function create(){
      return view('admin.addhotel');
   }
}
