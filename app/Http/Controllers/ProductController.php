<?php

// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Product; // Pastikan Anda memiliki model Product
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Mengambil semua produk dari database
        return view('landingpage', compact('products'));
    }
}
