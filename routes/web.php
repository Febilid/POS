<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\BuyerUserController;
use App\Http\Controllers\FoodBevarageController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\SaleController;

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



Route::get('/home', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/foodbeverage', [FoodBevarageController::class, 'index']);
    Route::get('/homecare', [HomeCareController::class, 'index']);
    Route::get('/babykid', [BabyKidController::class, 'index']);
    Route::get('/beautyhealth', [BeautyHealthController::class, 'index']);
});


Route::get('/id/{id}/name/{name}', [BuyerUserController::class, 'index']);

Route::get('/Sale', [SaleController::class, 'index']);