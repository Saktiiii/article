<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;


// Halaman Utama
Route::get('/', function () {
    return view('index');
})->name('home');

// Auth Routes
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Page (hanya untuk user login)
Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::resource('kategori', KategoriController::class)->middleware('auth');
Route::resource('artikel', ArtikelController::class)->middleware('auth');
