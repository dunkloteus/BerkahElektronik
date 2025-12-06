<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        Cart::create([
            'user_id' => auth()->id(),
            'product_name' => $request->product_name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        return redirect('/cart')->with('success', 'Produk ditambahkan!');
    }

    public function index()
    {
        $cart = Cart::where('user_id', auth()->id())->get();
        return view('cart.index', compact('cart'));
    }
}

