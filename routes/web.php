<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;

// Login routes
Route::get('/', function () {
    return view('login');  // Point to the Blade view where your login form is
})->name('login');

Route::get('/Home', function () {
    return view('landingapp');  // Redirect to the dashboard or the page for authenticated users
});

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('/Home', [HomeController::class, 'index']); // Dashboard utama
    Route::get('/Home', [ProductController::class, 'index']); // Halaman produk
});

// Static pages
Route::view('/blonded', 'album.blonded');
Route::view('/endless', 'album.endless');
Route::view('/chanelorange', 'album.orange');
Route::view('/video', 'plus.video');
Route::view('/terms', 'footer.terms');
Route::view('/help', 'footer.help');
Route::view('/privacy', 'footer.privacy');

// cart
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart']); // Menampilkan keranjang belanja
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/cart/count', function () {
    return response()->json(['count' => count(session('cart', []))]);
});



//auth
Auth::routes();  // Menambahkan semua route autentikasi termasuk logout

