<?php

use App\Http\Controllers\Tour;
use App\Http\Controllers\Store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\toko_controller;
use App\Http\Controllers\produk_controller;
use App\Http\Controllers\beranda_controller;
use App\Http\Controllers\reservasi_controller;
use App\Http\Controllers\AuthenticationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



route::get('/',[beranda_controller::class, 'index']);

route::get('/reservasi', [reservasi_controller::class, 'index']);

route::get('/toko', [toko_controller::class, 'index']);


route::get('/detail-produk/{produk:id}', [toko_controller::class, 'detail']);
Route::get('/store', [Store::class,'index']);
Route::get('/store/{id}', [Store::class,'detail']);

route::get('/reservasi', [Tour::class, 'index']);
route::get('/detail-booking', [Tour::class, 'detail']);
// route::get('/login',[beranda_controller::class, 'login']);

// Route::controller(Authentication::class)->group(function () {
//     Route::get('/signin', 'index')->name('signin');
// });

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/sign-in', 'login');
    Route::post('/sign-in', 'authenticate')->middleware('guest');
    Route::get('/register', [AuthenticationController::class, 'register']);
    Route::post('/indexregister', [AuthenticationController::class, 'indexregister']);
});

Route::post('/signout', [AuthenticationController::class,'signout'])->middleware('auth');



