<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferController extends Controller
{
    //
    public function handleCallbacktransfer(){



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

        // Utiliser le montant de la commande
        $amount_100 = $order->total_amount;

        // Utiliser l'email de l'utilisateur si disponible
        $userEmail = $order->user_email ?? 'N/A';

        // Vérifier si un paiement pour cette commande existe déjà
        $payment = Payment::where('order_id', $orderId)->first();

        if (!$payment) {
            // Si le montant est incorrect ou manquant, utiliser le montant de la commande
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
                'actions'=>'tranfer',
            ]);
            Log::info('Nouveau paiement créé pour la commande ID: ' . $orderId);
        }

        // Mise à jour du statut du paiement
        if ($success) {
            $payment->status = 'completed';

            // Mise à jour du statut de la commande
            $order->status = 'completed';
            $order->save();

            // Traiter les domaines dans la commande
            foreach ($order->items as $item) {
                // Transférer le domaine après paiement réussi
                $domain = Domain::where('name', $item->domain_name)->first();

                if ($domain) {
                    Log::info('Transfert du domaine pour la commande ID: ' . $orderId);

                    // Appeler la méthode pour transférer le domaine
                    $this->transferDomain($domain, $item->auth_code, $userEmail);

                    Log::info('Domaine transféré avec succès pour l\'utilisateur: ' . $userEmail);
                }
            }

            // Rediriger vers la page de succès
            return redirect()->route('checkout.success', ['order' => $order->id]);
        } elseif ($failure) {
            $payment->status = 'failed';

            $order->status = 'failed';
            $order->save();

            return redirect()->route('checkout.error', ['order' => $order->id]);
        } else {
            $payment->status = 'pending';
        }

        // Sauvegarder les données du callback dans la colonne callback_data
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

private function transferDomain($domain, $authCode, $userEmail)
{
    $apiUrl = 'http://localhost:8001/api/transfer';

    try {
        $response = Http::post($apiUrl, [
            'domain_name' => $domain->name,
            'auth_code' => $authCode,
            'purchase_price' => $domain->price,
        ]);

        if ($response->successful()) {
            Log::info('Domaine transféré avec succès: ' . $domain->name);

            // Marquer le domaine comme transféré ou mettre à jour son statut
            $domain->status = 'transferred';
            $domain->save();

            return true; // Succès du transfert
        } else {
            $statusCode = $response->status();
            $errorMessage = 'Erreur lors du transfert du domaine. Statut : ' . $statusCode;
            Log::error($errorMessage, ['response' => $response->body()]);
            return false; // Échec du transfert
        }
    } catch (\Throwable $th) {
        $errorMessage = 'Une erreur inattendue s\'est produite : ' . $th->getMessage();
        Log::error('Exception Error: ' . $errorMessage);
        return false; // Échec du transfert
    }
}

    }

