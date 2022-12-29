<?php

use App\Http\Controllers\BookingHistoryController;
use App\Http\Controllers\BookingPageController;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RegisLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('index');
});

Route::get('/login', [RegisLoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/logValid', [RegisLoginController::class, 'logValid'])->middleware('guest');
Route::get('/register', [RegisLoginController::class, 'register'])->name('register')->middleware('guest');
Route::post('/regValid', [RegisLoginController::class, 'regValid'])->middleware('guest');
Route::post('/logout', [RegisLoginController::class, 'logout'])->middleware('auth');

Route::get('dashboard', [RegisLoginController::class, 'dashboard'])->middleware(['auth', 'is_verify_email']);
Route::get('account/verify/{token}', [RegisLoginController::class, 'verifyAccount']);

Route::controller(BookingPageController::class)->name('booking.')->group(function () {
   Route::get('/booking/{transaction}', 'edit')->name('edit');
   Route::put('/booking/{transaction}', 'update')->name('update');
   Route::post('/booking/finalized/{transaction}', 'finalize')->name('finalize');
   Route::get('/booking/print-ticket/{transaction}', 'print-ticket')->name('print-ticket');
});

Route::get('/test', function () {
   // $pdf = \PDF::loadView('app.pdf.e-ticket');
   // return $pdf->download('pdfview.pdf');

   return view('app.pdf.e-ticket');
});

Route::resource('hotel', HotelController::class)->only(['create', 'store', 'edit', 'update', 'index', 'destroy']);

Route::get('/detailHotel/{hotel}', [DetailPageController::class, 'viewDetail']);

Route::get('/booking-history', [BookingHistoryController::class, 'index']);

Route::get('/about-us', function () {
   return view('about_us');
});

Route::patch('/update-profile-image/{id}', [RegisLoginController::class, 'editProfile']);
Route::get('/update-profile/{id}', [RegisLoginController::class, 'edit']);
Route::patch('/updated-profile', [RegisLoginController::class, 'update']);
