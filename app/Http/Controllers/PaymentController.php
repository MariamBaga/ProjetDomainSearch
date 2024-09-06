<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Domain;
use App\Models\Webhook;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\Models\OrderItem;
use  Illuminate\Support\Facades\Hash;

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
            $order = Order::find($request->input('order_id'));

            if ($order) {
                // Met à jour le statut de la commande en fonction du résultat du paiement
                $order->status = $request->input('status') === 'success' ? 'completed' : 'failed';
                $order->save();

                // Met à jour le statut des domaines associés à la commande si le paiement a réussi
                if ($order->status === 'completed') {
                    foreach ($order->orderItems as $item) {
                        $domain = Domain::find($item->domain_id);
                        if ($domain) {
                            $domain->status = 'unavailable';
                            $domain->save();
                        }
                    }
                }

                // Enregistre les détails du callback dans la base de données
                Webhook::create([
                    'event' => 'payment_callback',
                    'payload' => $request->all(),
                    'status' => 'processed',
                    'order_id' => $order->id,
                    'received_at' => now(),
                ]);
            }
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
                $order = Order::find($request->input('order_id'));

                if ($order) {
                    // Met à jour le statut de la commande en fonction du résultat du paiement
                    $order->status = $request->input('status') === 'success' ? 'completed' : 'failed';
                    $order->save();

                    // Met à jour le statut des domaines associés à la commande si le paiement a réussi
                    if ($order->status === 'completed') {
                        foreach ($order->orderItems as $item) {
                            $domain = Domain::find($item->domain_id);
                            if ($domain) {
                                $domain->status = 'unavailable';
                                $domain->save();
                            }
                        }
                    }

                    // Enregistre les détails du webhook dans la base de données
                    Webhook::create([
                        'event' => 'payment_webhook',
                        'payload' => $request->all(),
                        'status' => 'processed',
                        'order_id' => $order->id,
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
                'order_id' => $request->input('order_id'),
                'received_at' => now(),
            ]);
            throw $th;
        }

        return response()->json(['message' => 'Webhook traité'], 200);
    }

    /**
     * Vérifie la validité du callback.
     */
    private function verifyCallback(Request $request)
    {
        $apiKey = env('ORANGE_MONEY_API_KEY');
        return $request->input('api_key') === $apiKey;
    }

    /**
     * Vérifie la validité du webhook.
     */
    private function verifyWebhook(Request $request)
    {
        $webhookSecret = env('ORANGE_MONEY_WEBHOOK_SECRET');
        return $request->input('webhook_secret') === $webhookSecret;
    }









    






}
