<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdukMasukKeluarController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenggunaController;

// //login
// Route::get('/login', [PenggunaController::class, 'index'])->name('login');
// Route::post('login/cek', [PenggunaController::class, 'cekLogin'])->name('cekLogin');
// Route::get('logout', [PenggunaController::class, 'logout'])->name('logout');

//login
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('login/cek', [UserController::class, 'cekLogin'])->name('cekLogin');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::resource('/home', HomeController::class);
Route::resource('produk', ProdukController::class);
Route::resource('produkmasukkeluar', ProdukMasukKeluarController::class);
Route::resource('laporan', LaporanController::class);