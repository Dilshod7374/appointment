<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('business_hours',[\App\Http\Controllers\BusinessHourController::class, 'index']);
Route::post('business_hours',[\App\Http\Controllers\BusinessHourController::class, 'update'])->name('business_hours.update');
