<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart')->with('error', 'Votre panier est vide.');
        }

        return view('Checkout.view', compact('cart'));
    }

    public function process(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart')->with('error', 'Votre panier est vide.');
        }

        // Validate request
        $request->validate([
            'payment_method' => 'required|string',
        ]);

        // Create order
        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => array_sum(array_column($cart, 'price')),
            'payment_method' => $request->input('payment_method'),
            'status' => 'pending',
        ]);

        // Create order items
        foreach ($cart as $domainId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'domain_id' => $domainId,
                'price' => $item['price'],
                'duration' => $item['duration'],
            ]);
        }

        // Clear cart
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Votre commande a été passée avec succès.');
    }
}
