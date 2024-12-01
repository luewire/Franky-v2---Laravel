<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart; // Model untuk keranjang

class CartController extends Controller
{
    public function getCartItems(Request $request)
    {
        $userId = $request->user()->id; // Ambil ID pengguna yang sedang login
        $cartItems = Cart::with('product')->where('user_id', $userId)->get(); // Ambil produk di keranjang

        return response()->json($cartItems);
    }
}