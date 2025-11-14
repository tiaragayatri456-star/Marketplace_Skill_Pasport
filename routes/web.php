<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/produk', [HomeController::class, 'produk'])->name('produk');
Route::get('/detail/product', [HomeController::class, 'detail'])->name('detail-produk');
Route::get('/toko', [HomeController::class, 'toko'])->name('toko');

Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');

