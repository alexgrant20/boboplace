<?php

use App\Http\Controllers\BookingPageController;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RegisLoginController;
use App\Models\Hotel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
   $hotels = Hotel::all();

   return view('app.index', compact('hotels'));
})->name('home');

Route::controller(RegisLoginController::class)->group(function () {
   Route::get('/login', 'index')->name('login');
   Route::post('/logValid', 'logValid');
   Route::get('/register', 'register')->name('register');
   Route::post('/regValid', 'regValid');
   Route::post('/logout', 'logout');
   Route::get('account/verify/{token}', 'verifyAccount');

   Route::patch('/update-profile-image/{id}', 'editProfile');
   Route::get('/update-profile/{id}', 'edit')->name('profile.update');
   Route::patch('/updated-profile', 'update');
});


Route::controller(BookingPageController::class)->middleware('auth')->name('booking.')->group(function () {
   Route::get('/booking/{transaction}', 'edit')->name('edit');
   Route::put('/booking/{transaction}', 'update')->name('update');
   Route::post('/booking', 'store')->name('store');
   Route::post('/booking/finalized/{transaction}', 'finalize')->name('finalize');
   Route::get('/test', 'printTicket')->name('print-ticket');
   Route::get('/booking-history', 'history')->name('history');
});

Route::resource('hotel', HotelController::class)->except(['show']);

Route::get('/detailHotel/{hotel}', [DetailPageController::class, 'viewDetail'])->name('hotel.detail');

Route::get('/about-us', function () {
   return view('about_us');
})->name('about-us');

Route::get('/profile', function () {
   return view('profile');
});