<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionItemController extends Controller
{
    public function success()
    {
        $cart = Cart::where('user_id', auth()->id())->get();

        $transaction = Transaction::create([
            'user_id' => auth()->id(),
            'total_amount' => $cart->sum(fn($c) => $c->price * $c->quantity),
            'status' => 'paid'
        ]);

        foreach ($cart as $item) {
            TransactionItem::create([
                'transaction_id' => $transaction->id,
                'product_name' => $item->product_name,
                'price' => $item->price,
                'quantity' => $item->quantity
            ]);
        }

        Cart::where('user_id', auth()->id())->delete();

        return view('payment.success');
    }

}
