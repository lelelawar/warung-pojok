<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// 🏠 Halaman Beranda (menampilkan home.blade.php dengan produk)
Route::get('/', [HomeController::class, 'index'])->name('home');

// 📦 CRUD Produk
Route::resource('produk', ProdukController::class);

// 🏷️ CRUD Kategori
Route::resource('kategori', KategoriController::class);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//register
Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);