<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\toko_controller;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Api\TourPackageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'cors'], function (){
    // Route::get('/toko',[toko_controller::class ,"index"]);
    // Route::get('/toko/{id}',[toko_controller::class ,"detail"]);
    // Route::post('/login' , [AuthenticationController::class , "login"]);

    Route::get('user', [UsersController::class ,"index"]);
    Route::post('sign-in', [UsersController::class, 'signin']);
    Route::post('user/detail', [UsersController::class, 'detail']);
    Route::post('register', [UsersController::class, 'register']);

    Route::get('product', [ProductsController::class, 'index']);
    Route::post('product', [ProductsController::class, 'stored']);
    Route::get('product/detail/{id}', [ProductsController::class, 'detail']);
    Route::get('product/remove/{id}', [ProductsController::class, 'destroy']);

    Route::get('tourpackage', [TourPackageController::class, 'index']);
    Route::get('tourpackage/detail/{id}', [TourPackageController::class, 'detail']);
});

