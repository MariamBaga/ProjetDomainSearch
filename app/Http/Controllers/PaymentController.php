<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Domain;
use App\Models\Webhook;

class PaymentController extends Controller
{

    /**
     * Gère le callback de paiement d'Orange Money.
     */
    public function handleCallback(Request $request)
    {
        // Vérifie si le callback est valide
        if ($this->verifyCallback($request)) {
            // Trouve la commande par ID
            $order = Order::where('id', $request->input('order_id'))->first();

            if ($order) {
                // Met à jour le statut de la commande en fonction du résultat du paiement
                if ($request->input('status') == 'success') {
                    $order->status = 'completed';

                    // Met à jour le statut des domaines associés à la commande
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

            // Enregistre les détails du callback dans la base de données
            Webhook::create([
                'event' => 'payment_callback',
                'payload' => $request->all(),
                'status' => 'processed',
                'domain_id' => $request->input('domain_id'),
                'order_id' => $request->input('order_id'),
                'received_at' => now(),
            ]);
        }

        return response()->json(['message' => 'Callback traité'], 200);
    }

    /**
     * Gère les notifications webhook de paiement d'Orange Money.
     */
    public function handleWebhook(Request $request)
    {
        try {
            // Vérifie si le webhook est valide
            if ($this->verifyWebhook($request)) {
                // Trouve la commande par ID
                $order = Order::where('id', $request->input('order_id'))->first();

                if ($order) {
                    // Met à jour le statut de la commande en fonction du résultat du paiement
                    if ($request->input('status') == 'success') {
                        $order->status = 'completed';
                        $order->save();

                        // Met à jour le statut des domaines associés à la commande
                        foreach ($order->orderItems as $item) {
                            $domain = Domain::find($item->domain_id);
                            if ($domain) {
                                $domain->status = 'unavailable';
                                $domain->save();
                            }
                        }
                    } else {
                        $order->status = 'failed';
                        $order->save();
                    }

                    // Enregistre les détails du webhook dans la base de données
                    Webhook::create([
                        'event' => 'payment_webhook',
                        'payload' => $request->all(),
                        'status' => 'processed',
                        'domain_id' => $request->input('domain_id'),
                        'order_id' => $request->input('order_id'),
                        'received_at' => now(),
                    ]);
                }
            }
        } catch (\Throwable $th) {
            // Enregistre les erreurs de traitement dans la base de données
            Webhook::create([
                'event' => 'payment_webhook',
                'payload' => $request->all(),
                'status' => 'failed',
                'domain_id' => $request->input('domain_id'),
                'order_id' => $request->input('order_id'),
                'received_at' => now(),
            ]);
            // Rejette l'exception pour le journal de l'application
            throw $th;
        }

        return response()->json(['message' => 'Webhook traité'], 200);
    }

    /**
     * Vérifie la validité du callback.
     */
    private function verifyCallback(Request $request)
    {
        // Compare la clé API envoyée avec celle stockée dans l'environnement
        $apiKey = env('ORANGE_MONEY_API_KEY');
        return $request->input('api_key') === $apiKey;
    }

    /**
     * Vérifie la validité du webhook.
     */
    private function verifyWebhook(Request $request)
    {
        // Compare le secret du webhook envoyé avec celui stocké dans l'environnement
        $webhookSecret = env('ORANGE_MONEY_WEBHOOK_SECRET');
        return $request->input('webhook_secret') === $webhookSecret;
    }
}
