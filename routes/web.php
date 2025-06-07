<?php

use App\Http\Middleware\RoleCheckMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudioTableController;
use App\Http\Controllers\TiketTableController;
use App\Http\Controllers\PembayaranTableController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;


// Default route: redirect ke login
Route::get('/', function () {
    return redirect('/login');
});

// Route login & register
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route hanya untuk user yang sudah login
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard.home');

    // Resource routes

    Route::middleware([RoleCheckMiddleware::class])->group(function () {
        Route::resource('film', FilmController::class);
        Route::resource('jadwal', JadwalController::class);
        Route::resource('pelanggan', PelangganController::class);
        Route::get('/studio', [StudioTableController::class, 'index'])->name('studio.index');
        Route::get('/studio/create', [StudioTableController::class, 'create'])->name('studio.create');
        Route::post('/studio', [StudioTableController::class, 'store'])->name('studio.store');
        Route::get('/studio/{id}', [StudioTableController::class, 'show'])->name('studio.show');
        Route::get('/studio/{id}/edit', [StudioTableController::class, 'edit'])->name('studio.edit');
        Route::put('/studio/{id}', [StudioTableController::class, 'update'])->name('studio.update');
        Route::delete('/studio/{id}', [StudioTableController::class, 'destroy'])->name('studio.destroy');
    });
    // Custom routes untuk studio (karena bukan resource)
    
    Route::resource('tiket', TiketTableController::class);
    Route::resource('pembayaran', PembayaranTableController::class);
});
