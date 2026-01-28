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
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PelaporanAssetController;
use Illuminate\Support\Facades\Route;

Route::get('/tentang', function () {
    return view('pages.tentang');
});
//Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak/store', [KontakController::class, 'store'])->name('kontak.store');

//Pelaporan
Route::get('/pelaporan/asset', [PelaporanAssetController::class, 'index'])->name('pelaporan_asset.index');
Route::post('/pelaporan/asset//store', [PelaporanAssetController::class, 'store'])->name('pelaporan_asset.store');


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Register
// Tambahkan di paling bawah file web.php
Route::get('/cek/{input}', [App\Http\Controllers\SicController::class, 'cekInput']);
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
Route::get('/cek/{input}', [App\Http\Controllers\SicController::class, 'cekInput']);