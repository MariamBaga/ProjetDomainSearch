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
    /**
     * Affiche la page de paiement.
     */
    public function index()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart')->with('error', 'Votre panier est vide.');
        }

        // Récupère la liste des pays (exemple pour une fonctionnalité future)
        $countries = Country::all();

        return view('Checkout.view', compact('cart', 'countries'));
    }

    /**
     * Traite la commande et le paiement.
     */
    public function process(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart')->with('error', 'Votre panier est vide.');
        }

        // Valide les données de la requête
        $request->validate([
            'payment_method' => 'required|string',
        ]);

        // Crée une nouvelle commande
        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => array_sum(array_column($cart, 'price')),
            'payment_method' => $request->input('payment_method'),
            'status' => 'pending',
        ]);

        // Crée des éléments de commande pour chaque domaine dans le panier
        foreach ($cart as $domainId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'domain_id' => $domainId,
                'price' => $item['price'],
                'duration' => $item['duration'],
            ]);
        }

        // Gère le paiement avec Orange Money
        if ($request->input('payment_method') === 'orange_money') {
            $response = $this->initiateOrangeMoneyPayment($order);

            if ($response->successful()) {
                session()->forget('cart');
                return view('success');
            } else {
                return view('error');
            }
        }

        // Si le paiement n'est pas avec Orange Money, redirige vers une page de succès
        session()->forget('cart');
        return view('success');
    }

    /**
     * Initie le paiement avec Orange Money.
     */
    private function initiateOrangeMoneyPayment($order)
    {
        // Remplacez l'URL et les données par celles requises par l'API d'Orange Money
        $response = Http::post('https://api.orange.com/orange-money/payment', [
            'order_id' => $order->id,
            'amount' => $order->total,
            'currency' => 'XOF', // Monnaie utilisée
            'callback_url' => route('payment.callback'), // URL pour le callback
            'webhook_url' => route('payment.webhook'), // URL pour les notifications webhook
            'api_key' => env('ORANGE_MONEY_API_KEY'), // Clé API
        ]);

        return $response;
    }
}
