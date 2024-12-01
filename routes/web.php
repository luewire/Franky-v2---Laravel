<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

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
    return view('login');
});

Route::get('/Home', [ProductController::class, 'index']);

Route::get('/blonded', function () {
    return view('album.blonded');
});

Route::get('/endless', function () {
    return view('album.endless');
});

Route::get('/chanelorange', function () {
    return view('album.orange');
});

Route::get('/video', function () {
    return view('plus.video');
});

Route::get('/terms', function () {
    return view('footer.terms');
});
