<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Country;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart')->with('error', 'Votre panier est vide.');
        }

        $countries = Country::all();

        return view('Checkout.view', compact('cart', 'countries'));
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

        // Handle payment with Orange Money
        if ($request->input('payment_method') === 'orange_money') {
            $response = $this->initiateOrangeMoneyPayment($order);

            if ($response->successful()) {
                // Payment successful
                session()->forget('cart');
                return view('success');
            } else {
                // Payment failed
                return view('error');
            }
        }

        // Default behavior
        session()->forget('cart');
        return view('success');
    }

    private function initiateOrangeMoneyPayment($order)
    {
        // Replace with actual API endpoint and data required by Orange Money
        $response = Http::post('https://api.orange.com/orange-money/payment', [
            'order_id' => $order->id,
            'amount' => $order->total,
            'currency' => 'XOF', // Example currency
            'callback_url' => route('payment.callback'), // URL to handle the callback from Orange Money
            'api_key' => 'YOUR_API_KEY', // Replace with your actual API key
        ]);

        return $response;
    }
}
