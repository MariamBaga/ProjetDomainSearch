<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenewController extends Controller
{
    //
    public function handleCallbackrenew(){



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

        // Utiliser l'email de l'utilisateur si disponible
        $userEmail = $order->user_email ?? 'N/A';

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
                'transaction_id' => $transactionId ?? 'N/A',
                'amount' => $amount,
                'status' => 'pending',
                'user_email' => $userEmail,
                'actions'=>'renew',
            ]);
            Log::info('Nouveau paiement créé pour la commande ID: ' . $orderId);
        }

        // Mettre à jour le statut du paiement en fonction du succès/échec
        if ($success) {
            $payment->status = 'completed';
            $order->status = 'completed';
            $order->save();

            // Renouveler le domaine associé à la commande
            foreach ($order->items as $item) {
                Log::info('Renouvellement du domaine pour la commande ID: ' . $orderId);

                // Appeler la méthode pour renouveler le domaine
                $this->renewDomain($item->domain_name, $item->price);

                Log::info('Domaine renouvelé avec succès pour la commande ID: ' . $orderId);
            }

            return redirect()->route('checkout.success', ['order' => $order->id]);

        } elseif ($failure) {
            $payment->status = 'failed';
            $order->status = 'failed';
            $order->save();

            return redirect()->route('checkout.error', ['order' => $order->id]);
        } else {
            $payment->status = 'pending';
        }

        // Sauvegarder les données du callback dans la colonne callback_data (format JSON)
        $payment->callback_data = json_encode($request->all());
        $payment->save();

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

// Fonction privée pour renouveler un domaine
private function renewDomain($domainName, $purchasePrice)
{
    $apiUrl = 'http://localhost:8001/api/renew';

    try {
        $response = Http::post($apiUrl, [
            'domain_name' => $domainName,
            'purchase_price' => $purchasePrice,
        ]);

        if ($response->successful()) {
            Log::info('Renouvellement réussi pour le domaine : ' . $domainName);
            return true; // Indique un succès
        } else {
            $statusCode = $response->status();
            $errorMessage = 'Erreur lors du renouvellement du domaine. Statut : ' . $statusCode;
            Log::error($errorMessage, ['response' => $response->body()]);
            return false; // Indique un échec
        }
    } catch (\Throwable $th) {
        $errorMessage = 'Une erreur inattendue s\'est produite : ' . $th->getMessage();
        Log::error('Exception lors du renouvellement : ' . $errorMessage);
        return false; // Indique un échec
    }
}

    }

