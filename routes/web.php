<?php

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