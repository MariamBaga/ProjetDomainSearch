<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Domain;

class PaymentController extends Controller
{
    public function handleCallback(Request $request)
    {
        // Étape 3: Vérifier le Callback
        if ($this->verifyCallback($request)) {
            // Étape 4: Mettre à Jour le Statut de la Commande
            $order = Order::where('id', $request->input('order_id'))->first();

            if ($order) {
                if ($request->input('status') == 'success') {
                    $order->status = 'completed';

                    // Mettre à jour le statut des domaines
                    foreach ($order->orderItems as $item) {
                        $domain = Domain::find($item->domain_id);
                        if ($domain) {
                            $domain->status = 'unavailable';
                            $domain->save();
                        }
                    }
                } else {
                    $order->status = 'failed';
                }
                $order->save();
            }
        }

        return response()->json(['message' => 'Callback traité'], 200);
    }

    private function verifyCallback(Request $request)
    {
        // Implémentez la logique pour vérifier que le callback provient bien d'Orange Money
        // Cela peut inclure la vérification de signatures, de tokens, etc.

        // Exemple de vérification basique
        $apiKey = env('ORANGE_MONEY_API_KEY');
        return $request->input('api_key') === $apiKey;
    }
}
