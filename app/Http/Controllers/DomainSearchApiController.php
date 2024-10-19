<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Domain;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class DomainSearchApiController extends Controller
{
    public function fetchDomains(Request $request)
    {
        Log::info('Session avant l\'appel API: ', session()->all());

        // Récupérer les données du formulaire
        $domainName = $request->input('domain_name');
        $domainExtension = $request->input('domain_extension');

        try {
            // URL de l'API locale
            $apiUrl = 'http://localhost:8001/api/search'; // URL correcte de l'API locale

            session()->save(); // Cela sauvegarde explicitement la session
            // Appel à l'API pour obtenir les domaines
            $response = Http::get($apiUrl, [
                'domain_name' => $domainName,
                'domain_extension' => $domainExtension,
            ]);
            Log::info('Session après l\'appel API: ', session()->all());
            if ($response->successful()) {
                $domains = $response->json()['data']['results'];

                // Taux de conversion actuel
                $conversionRate = 600; // 1 USD = 600 FCFA

                // Adapter la structure des données et filtrer les domaines disponibles
                $formattedDomains = collect($domains)
                    ->map(function ($domain) use ($conversionRate) {
                        // Conversion du prix en FCFA
                        $priceInCFA = isset($domain['purchasePrice']) ? $domain['purchasePrice'] * $conversionRate : 'N/A';

                        return [
                            'id' => $domain['domainName'] ?? 'N/A', // Utiliser `domainName` comme identifiant
                            'name' => $domain['sld'] ?? 'N/A',
                            'extension' => $domain['tld'] ?? 'N/A',
                            'status' => isset($domain['purchasable']) ? ($domain['purchasable'] ? 'available' : 'unavailable') : 'unknown',
                            'price' => $priceInCFA, // Prix en FCFA
                            'duration' => 1, // Fixé à 1 an pour cet exemple
                        ];
                    })
                    ->filter(function ($domain) {
                        return $domain['status'] === 'available'; // Filtrer pour garder seulement les disponibles
                    });

                session()->put('searched_domains', $formattedDomains);
                // Log de l'utilisateur après l'appel à l'API
                Log::info('Réponse de recherche de domaine reçue pour l\'utilisateur : ', ['user_id' => Auth::id()]);

                // Log des résultats avant de retourner la vue
                Log::info('Résultats de recherche pour : ', ['domain' => $request->input('domain_name'), 'results' => $response]);

                // Passer les domaines formatés à la vue Blade
                return view('Domain.indexApii', [
                    'domains' => $formattedDomains,
                    'domainName' => $domainName,
                    'extension' => $domainExtension,
                ]);
            } else {
                // Gérer les erreurs d'API
                $statusCode = $response->status();
                $errorMessage = '';

                switch ($statusCode) {
                    case 401:
                        $errorMessage = 'Authentification échouée. Veuillez vérifier votre nom d\'utilisateur et votre token.';
                        break;
                    case 403:
                        $errorMessage = 'Accès refusé. Vos identifiants n\'ont pas les permissions nécessaires.';
                        break;
                    case 404:
                        $errorMessage = 'API non trouvée. Veuillez vérifier l\'URL de l\'API.';
                        break;
                    case 500:
                        $errorMessage = 'Erreur serveur interne. Essayez de nouveau plus tard.';
                        break;
                    default:
                        $errorMessage = 'Une erreur inconnue est survenue. Statut : ' . $statusCode;
                }

                Log::error('API Error: ' . $errorMessage . ' | Status Code: ' . $statusCode . ' | Response: ' . $response->body());

                return response()->json(['error' => $errorMessage], $statusCode);
            }
        } catch (\Throwable $th) {
            // Gérer les exceptions et retourner une réponse JSON avec le message d'erreur
            $errorMessage = 'Une erreur inattendue s\'est produite : ' . $th->getMessage();
            Log::error('Exception Error: ' . $errorMessage);

            return response()->json(['error' => $errorMessage], 500);
        }
    }

    public function registerDomains(Request $request)
    {
        $domainName = $request->input('domain_name');
        $purchasePrice = $request->input('purchase_price', 12.99);

        try {
            $apiUrl = 'http://localhost:8001/api/register';

            // Log du payload pour vérification
            Log::info('Payload: ', ['domain_name' => $domainName, 'purchase_price' => $purchasePrice]);

            $response = Http::post($apiUrl, [
                'domain_name' => $domainName,
                'purchase_price' => $purchasePrice,
            ]);

            // Log la réponse complète
            Log::info('API Response Status: ' . $response->status());
            Log::info('API Response Body: ' . $response->body());

            if ($response->successful()) {
                return response()->json(['success' => 'Domaine enregistré avec succès.']);
            } else {
                $statusCode = $response->status();
                $errorMessage = 'Erreur lors de l\'enregistrement du domaine. Statut : ' . $statusCode;
                Log::error($errorMessage);
                return response()->json(['error' => $errorMessage], $statusCode);
            }
        } catch (\Throwable $th) {
            $errorMessage = 'Une erreur inattendue s\'est produite : ' . $th->getMessage();
            Log::error('Exception Error: ' . $errorMessage);
            return response()->json(['error' => $errorMessage], 500);
        }
    }

    // Méthode pour renouveler un domaine
    public function renewDomain(Request $request)
    {
        // Validation des données du formulaire
        $validated = $request->validate([
            'domain_id' => 'required|exists:domains,id',
            'years' => 'required|integer|min:1|max:5',
            'price' => 'required|numeric|min:0',
        ]);

        // Récupérer le domaine
        $domain = Domain::findOrFail($validated['domain_id']);
        $user = auth()->user(); // Ajout de cette ligne pour définir la variable $user


        // Créer la commande
        $order = new Order();
        $order->user_id = auth()->id();
        $order->email = auth()->user()->email; // Stocker l'email de l'utilisateur
        $order->user_email = $user ? $user->email : 'default@example.com';
        $order->phone = $request->input('phone') ?? '0000000000';
        $order->country_name = 'default_country';
        $order->address = $request->input('address') ?? 'default_address';
        $order->city = $request->input('city') ?? 'default_city';
        $order->total_amount = $validated['price'];
        $order->status = 'pending';
        $order->actions = 'renew';


        $order->save();

        // Enregistrer les éléments de la commande
        OrderItem::create([
            'order_id' => $order->id,
            'domain_name' => $domain->name,
            'domain_extension' => $domain->extension,
            'price' => $validated['price'],
            'duration' => $validated['years'],
            'actions' => 'renew', // Assigner "register" comme action
        ]);

        // Appeler la fonction de paiement
        return $this->makePaymentrenew($order);
    }

    private function makePaymentrenew(Order $order)
    {
        $api_key = 'd7KvHyrHN6rg2A';
        $api_secret = '93f0003d4dc2a6a8eb1de3b331133b29';
        $amount_100 = $order->total_amount * 100;
        $order_id = 'ORD' . $order->id;

        $callback_url = 'https://cffc-2001-42c0-8204-8e00-ffd5-b63c-570b-5887.ngrok-free.app/api/paiement/callback/renew'; // Remplacez par l'URL publique

        $upped = strtoupper("$order_id;$amount_100;XOF;$callback_url;$api_secret");
        $hash = sha1($upped);

        $payload = [
            'api_key' => $api_key,
            'hash' => $hash,
            'username' => '',
            'api_version' => '1',
            'payment[language_code]' => 'fr',
            'payment[currency_code]' => 'XOF',
            'payment[country_code]' => 'ML',
            'payment[order_id]' => $order_id,
            'payment[description]' => 'Renouvellement de domaine',
            'payment[amount_100]' => $amount_100,
            'payment[return_url]' => route('payment.success.renew', ['order' => $order->id]),
            'payment[decline_url]' => route('payment.error.renew', ['order' => $order->id]),
            'payment[cancel_url]' => route('payment.cancel.renew'),
            'payment[callback_url]' => $callback_url,
            'payment[email]' => auth()->user()->email,
            'payment[api_key]' => $api_key,
            'payment[p_type]' => 'orange_money',
        ];

        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->request('POST', 'https://api.vitepay.com/v1/prod/payments', [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'api_key' => $api_key,
                    'api_secret' => $api_secret,
                ],
                'body' => http_build_query($payload),
                'timeout' => 90,
                'verify' => true,
            ]);
            $url = $response->getBody()->getContents();
            return redirect()->away($url);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            Log::error('Erreur lors de la demande de paiement : ' . $e->getMessage());
            return redirect()->route('checkout.error')->with('error', 'Une erreur est survenue lors du traitement du paiement.');
        }
    }

    // Méthode pour transférer un domaine

    public function transferDomain(Request $request)
    {
        // Validation des données du formulaire
        $validated = $request->validate([
            'domain_id' => 'required|exists:domains,id',
            'newOwnerEmail' => 'required|email',
            'price' => 'required|numeric|min:0',
        ]);

        // Récupérer le domaine
        $domain = Domain::findOrFail($request->domain_id);

        // Créer la commande pour le transfert
        $order = new Order();
        $order->domain_id = $domain->id;
        $order->email = auth()->user()->email; // Stocker l'email de l'utilisateur
        $order->user_id = auth()->id(); // ID de l'utilisateur connecté
        $order->total_amount = $validated['price'];
        $order->status = 'pending';
        $order->actions = 'transfer'; // Assigner "renew" comme action

        $order->save();
        // Enregistrer les éléments de la commande
        OrderItem::create([
            'order_id' => $order->id,
            'domain_name' => $domain->name,
            'domain_extension' => $domain->extension,
            'price' => $validated['price'],
            'duration' => $validated['years'],
            'actions' => 'transfer', // Assigner "register" comme action
        ]);

        // Appeler la fonction de paiement
        return $this->makePaymenttransfer($order);
    }

    private function makePaymenttransfer(Order $order)
    {
        $api_key = 'd7KvHyrHN6rg2A';
        $api_secret = '93f0003d4dc2a6a8eb1de3b331133b29';
        $amount_100 = $order->total_amount * 100;
        $order_id = 'ORD' . $order->id;

        $callback_url = 'https://cffc-2001-42c0-8204-8e00-ffd5-b63c-570b-5887.ngrok-free.app/api/paiement/callback/transfer'; // Remplacez par l'URL publique

        $upped = strtoupper("$order_id;$amount_100;XOF;$callback_url;$api_secret");
        $hash = sha1($upped);

        $payload = [
            'api_key' => $api_key,
            'hash' => $hash,
            'username' => '',
            'api_version' => '1',
            'payment[language_code]' => 'fr',
            'payment[currency_code]' => 'XOF',
            'payment[country_code]' => 'ML',
            'payment[order_id]' => $order_id,
            'payment[description]' => 'Transfert de domaine',
            'payment[amount_100]' => $amount_100,
            'payment[return_url]' => route('payment.success.transfer', ['order' => $order->id]),
            'payment[decline_url]' => route('payment.error.transfer', ['order' => $order->id]),
            'payment[cancel_url]' => route('payment.cancel.transfer'),
            'payment[callback_url]' => $callback_url,
            'payment[email]' => $order->email, // Remplacez avec l'email de l'utilisateur ou du nouveau propriétaire
            'payment[api_key]' => $api_key,
            'payment[p_type]' => 'orange_money',
        ];

        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->request('POST', 'https://api.vitepay.com/v1/prod/payments', [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'api_key' => $api_key,
                    'api_secret' => $api_secret,
                ],
                'body' => http_build_query($payload),
                'timeout' => 90,
                'verify' => true,
            ]);
            $url = $response->getBody()->getContents();
            return redirect()->away($url);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            Log::error('Erreur lors de la demande de paiement : ' . $e->getMessage());
            return redirect()->route('checkout.error')->with('error', 'Une erreur est survenue lors du traitement du paiement.');
        }
    }
}
