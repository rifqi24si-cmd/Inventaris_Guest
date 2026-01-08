<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriAsetController;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\LokasiAsetController;
use App\Http\Controllers\PemeliharaanAsetController;
use App\Http\Controllers\MutasiAsetController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('user', UserController::class);
Route::resource('warga', WargaController::class);
Route::resource('kategori', KategoriAsetController::class);
Route::resource('aset', AsetController::class);
Route::resource('lokasi', LokasiAsetController::class);
Route::resource('pemeliharaan', PemeliharaanAsetController::class);
Route::resource('mutasi', MutasiAsetController::class);