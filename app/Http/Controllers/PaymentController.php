<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Payment;
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
//     public function handleCallback(Request $request)
// {

//    // Vérifie si le callback est valide
//     if ($this->verifyCallback($request)) {
//         // Trouve la commande par ID
//         $order = Order::find($request->input('order_id'));

//         if ($order) {
//             // Met à jour le statut de la commande en fonction du résultat du paiement
//             $order->status = $request->input('status') === 'success' ? 'completed' : 'failed';
//             $order->save();

//             // Si le paiement a réussi, enregistre les domaines associés
//             if ($order->status === 'completed') {
//                 foreach ($order->orderItems as $item) {
//                     $domain = Domain::find($item->domain_id);
//                     if ($domain) {
//                         // Enregistrer le domaine au nom de l'utilisateur
//                         $this->registerDomain($domain, Auth::user());
//                     }
//                 }
//             }

//             // Enregistre les détails du callback dans la table des webhooks
//             Webhook::create([
//                 'event' => 'payment_callback',
//                 'payload' => $request->all(),
//                 'status' => 'processed',
//                 'order_id' => $order->id,
//                 'received_at' => now(),
//             ]);
//         } else {
//             Log::error("Commande non trouvée pour le callback");
//         }
//     } else {
//         Log::warning("Callback invalide");
//     }

//     return response()->json(['message' => 'Callback traité'], 200);
// }









    /**
     * Gère le callback de paiement d'Orange Money.
     */
    public function handleCallback(Request $request)
    {
        Log::info('Callback reçu de VitePay', $request->all());

        try {
            // Récupérer les données du callback
            $orderId = $request->input('order_id');
            $success = $request->input('success');
            $failure = $request->input('failure');
            $transactionId = $request->input('transaction_id');
            $amount = $request->input('amount'); // Si l'API retourne le montant

            if (!$orderId) {
                Log::error('ID de commande manquant dans le callback');
                return response()->json(['error' => 'ID de commande manquant'], 400);
            }

            // Supprimer le préfixe 'ORD' pour trouver l'ID réel de la commande
            $cleanOrderId = substr($orderId, 3);

            // Rechercher la commande dans la table 'orders'
            $order = Order::find($cleanOrderId);

            if (!$order) {
                Log::error('Commande non trouvée pour l\'ID: ' . $orderId);
                return response()->json(['error' => 'Commande non trouvée'], 404);
            }

             // Utiliser le montant de la commande et le multiplier par 100 si nécessaire
        $amount_100 = $order->total_amount;


            // Vérifier si un paiement pour cet ordre existe déjà
            $payment = Payment::where('order_id', $orderId)->first();

            if (!$payment) {
                // Si le montant est manquant ou incorrect, utiliser le montant de la commande * 100
            if (!$amount || $amount != $amount_100) {
                $amount = $amount_100;
            }

                // Créer un nouveau paiement si aucun n'existe
                $payment = Payment::create([
                    'order_id' => $orderId,
                    'transaction_id' => $transactionId ?? 'N/A', // Si 'transaction_id' est manquant
                    'amount' => $amount,
                    'status' => 'pending', // Mettre à jour après selon les données reçues
                ]);
                Log::info('Nouveau paiement créé pour la commande ID: ' . $orderId);
            }

            // Mettre à jour le statut du paiement en fonction du succès/échec
            if ($success) {
                $payment->status = 'completed';
            } elseif ($failure) {
                $payment->status = 'failed';
            } else {
                $payment->status = 'pending';
            }

            // Sauvegarder les données du callback dans la colonne callback_data (format JSON)
            $payment->callback_data = json_encode($request->all());
            $payment->save();

            // Enregistrer le webhook
            Webhook::create([
                'event' => 'payment_callback',
                'payload' => $request->all(),
                'status' => 'processed',
                'order_id' => $cleanOrderId,
                'received_at' => now(),
            ]);

            Log::info('Webhook créé avec succès pour la commande ID: ' . $orderId);

            return response()->json(['message' => 'Callback traité avec succès'], 200);

        } catch (\Exception $e) {
            Log::error('Erreur lors du traitement du callback : ' . $e->getMessage());
            return response()->json(['error' => 'Erreur serveur'], 500);
        }
    }




    /**
     * Gère les notifications webhook de paiement d'Orange Money.
     */
    public function handleWebhook(Request $request)
    {
        Log::info('Webhook reçu avec les données : ', $request->all());

        try {
            // Traitement du webhook, similaire au callback
            $orderId = $request->input('order_id');

            if (!$orderId) {
                Log::error('ID de commande manquant dans le webhook');
                return response()->json(['error' => 'ID de commande manquant'], 400);
            }


            $order = Order::find($orderId);

            if (!$order) {
                Log::error('Commande non trouvée pour l\'ID: ' . $orderId);
                return response()->json(['error' => 'Commande non trouvée'], 404);
            }

            // Enregistrement des données du webhook dans la base de données
            Webhook::create([
                'event' => 'payment_webhook',
                'payload' => $request->all(),
                'status' => 'processed',
                'order_id' => $order->id,
                'received_at' => now(),
            ]);

            Log::info('Webhook créé avec succès pour la commande ID: ' . $order->id);

            return response()->json(['message' => 'Webhook traité avec succès'], 200);

        } catch (\Exception $e) {
            Log::error('Erreur lors du traitement du webhook : ' . $e->getMessage());
            return response()->json(['error' => 'Erreur serveur'], 500);
        }
    }





















/**
 * Enregistre le domaine au nom de l'utilisateur.
 */
private function registerDomain($domain, $user)
{
    $apiUrl = 'http://localhost:8001/api/register';

    try {
        $response = Http::post($apiUrl, [
            'domain_name' => $domain->name . '.' . $domain->extension,
            'purchase_price' => $domain->price,
            'user_id' => $user->id, // Assurez-vous que l'API accepte cette information
        ]);

        if ($response->successful()) {
            // Si l'enregistrement est réussi, marque le domaine comme non disponible
            $domain->status = 'unavailable';
            $domain->save();

            Log::info('Domaine enregistré avec succès pour l\'utilisateur ' . $user->id);
        } else {
            $statusCode = $response->status();
            $errorMessage = 'Erreur lors de l\'enregistrement du domaine. Statut : ' . $statusCode;
            Log::error($errorMessage);
        }
    } catch (\Throwable $th) {
        $errorMessage = 'Une erreur inattendue s\'est produite : ' . $th->getMessage();
        Log::error('Exception Error: ' . $errorMessage);
    }
}




    /**
     * Gère les notifications webhook de paiement d'Orange Money.
     */
    // public function handleWebhook(Request $request)
    // {
    //     try {
    //         // Vérifie si le webhook est valide
    //         if ($this->verifyWebhook($request)) {
    //             // Trouve la commande par ID
    //             $order = Order::find($request->input('order_id'));

    //             if ($order) {
    //                 // Met à jour le statut de la commande en fonction du résultat du paiement
    //                 $order->status = $request->input('status') === 'success' ? 'completed' : 'failed';
    //                 $order->save();

    //                 // Si le paiement a réussi, met à jour les domaines associés
    //                 if ($order->status === 'completed') {
    //                     foreach ($order->orderItems as $item) {
    //                         $domain = Domain::find($item->domain_id);
    //                         if ($domain) {
    //                             $domain->status = 'unavailable';
    //                             $domain->save();
    //                         }
    //                     }
    //                 }

    //                 // Enregistre les détails du webhook dans la base de données
    //                 Webhook::create([
    //                     'event' => 'payment_webhook',
    //                     'payload' => $request->all(),
    //                     'status' => 'processed',
    //                     'order_id' => $order->id,
    //                     'received_at' => now(),
    //                 ]);
    //             } else {
    //                 Log::error('Commande non trouvée pour le webhook');
    //             }
    //         } else {
    //             Log::warning('Webhook invalide');
    //         }
    //     } catch (\Throwable $th) {
    //         Log::error('Erreur lors du traitement du webhook: ' . $th->getMessage());
    //         Webhook::create([
    //             'event' => 'payment_webhook',
    //             'payload' => $request->all(),
    //             'status' => 'failed',
    //             'order_id' => $request->input('order_id'),
    //             'received_at' => now(),
    //         ]);
    //     }

    //     return response()->json(['message' => 'Webhook traité'], 200);
    // }

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
