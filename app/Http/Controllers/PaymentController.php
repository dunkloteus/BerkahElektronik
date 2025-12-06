<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout()
    {
        $cart = Cart::where('user_id', auth()->id())->get();

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $lineItems = [];

        foreach ($cart as $item) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'idr',
                    'product_data' => ['name' => $item->product_name],
                    'unit_amount' => $item->price,
                ],
                'quantity' => $item->quantity,
            ];
        }

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => url('/payment/success'),
            'cancel_url' => url('/payment/cancel'),
        ]);

        return redirect($session->url);
    }

}
