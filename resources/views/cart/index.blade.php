@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-4 text-white">Shopping Cart</h1>

        @if (count($cart) > 0)
            <div class="space-y-6">
                @foreach ($cart as $id => $item)
                    <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg shadow-sm bg-opacity-80 bg-gray-800">
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="w-32 h-32 object-cover rounded-md">
                            <div>
                                <h5 class="text-lg font-medium text-white">{{ $item['name'] }}</h5>
                                <p class="text-sm text-gray-400">Price: ${{ number_format($item['price'], 2) }}</p>
                                <p class="text-sm text-gray-400">Quantity: {{ $item['quantity'] }}</p>
                            </div>
                        </div>
                        <div>
                            <!-- Remove button -->
                            <a href="{{ route('cart.remove', $id) }}" class="text-red-600 hover:text-red-800">
                                Remove
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-white">Total: ${{ number_format(array_sum(array_map(function ($item) {
                    return $item['price'] * $item['quantity'];
                }, $cart)), 2) }}</h3>
            </div>

            <div class="mt-4">
                <a href="/checkout" class="inline-block px-6 py-2 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700">
                    Proceed to Checkout
                </a>
            </div>
        @else
            <p class="text-gray-600 text-white">Your cart is empty.</p>
        @endif
    </div>
@endsection
