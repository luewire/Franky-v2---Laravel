<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function addToCart($id)
{
    $product = Product::findOrFail($id);

    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image,
        ];
    }

    session()->put('cart', $cart);

    // Mengembalikan response AJAX (misalnya, jumlah item di keranjang)
    return response()->json([
        'cart_count' => count($cart),
    ]);
}

// Method untuk menampilkan isi cart
public function showCart()
{
    // Mengambil data cart dari session
    $cart = session()->get('cart', []);

    // Menampilkan data cart di log
    Log::info($cart);

    // Menampilkan halaman cart dan mengirim data cart ke view
    return view('cart.index', ['cart' => $cart]);
}

public function removeFromCart($id)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        unset($cart[$id]); // Hapus produk dari cart
        session()->put('cart', $cart);
    }

    return redirect('/cart'); // Kembali ke halaman cart setelah menghapus produk
}
}


