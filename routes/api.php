<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\pelanggan_tableController;
use App\Http\Controllers\pembayaran_tableController;
use App\Http\Controllers\studio_tableController;
use App\Http\Controllers\tiket_tableController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::resource('jadwal', JadwalController::class);
Route::resource('film', FilmController::class);
Route::resource('pelanggan', pelanggan_tableController::class);
Route::resource('pembayaran', pembayaran_tableController::class);
Route::resource('studio', studio_tableController::class);
Route::resource('tiket', tiket_tableController::class);