<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DomainSearchApiController extends Controller
{
    public function fetchDomains(Request $request)
{
    // Récupérer les données du formulaire
    $domainName = $request->input('domain_name');
    $domainExtension = $request->input('domain_extension');

    try {
        // URL de l'API locale
        $apiUrl = 'http://localhost:8001/api/search'; // URL correcte de l'API locale

        // Appel à l'API pour obtenir les domaines
        $response = Http::get($apiUrl, [
            'domain_name' => $domainName,
            'domain_extension' => $domainExtension,
        ]);

        if ($response->successful()) {
            $domains = $response->json()['data']['results'];

            // Taux de conversion actuel
            $conversionRate = 600; // 1 USD = 600 FCFA

            // Adapter la structure des données et filtrer les domaines disponibles
            $formattedDomains = collect($domains)->map(function ($domain) use ($conversionRate) {
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
            })->filter(function ($domain) {
                return $domain['status'] === 'available'; // Filtrer pour garder seulement les disponibles
            });

            session()->put('searched_domains', $formattedDomains);

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
        $domainName = $request->input('domain_name');
        $purchasePrice = $request->input('purchase_price', 12.99);

        try {
            $apiUrl = 'http://localhost:8001/api/renew';

            $response = Http::post($apiUrl, [
                'domain_name' => $domainName,
                'purchase_price' => $purchasePrice,
            ]);

            if ($response->successful()) {
                return response()->json(['success' => 'Domaine renouvelé avec succès.']);
            } else {
                $statusCode = $response->status();
                $errorMessage = 'Erreur lors du renouvellement du domaine. Statut : ' . $statusCode;
                Log::error($errorMessage);
                return response()->json(['error' => $errorMessage], $statusCode);
            }
        } catch (\Throwable $th) {
            $errorMessage = 'Une erreur inattendue s\'est produite : ' . $th->getMessage();
            Log::error('Exception Error: ' . $errorMessage);
            return response()->json(['error' => $errorMessage], 500);
        }
    }

    // Méthode pour transférer un domaine
    public function transferDomain(Request $request)
    {
        $domainName = $request->input('domain_name');
        $authCode = $request->input('auth_code');
        $purchasePrice = $request->input('purchase_price', 12.99);

        try {
            $apiUrl = 'http://localhost:8001/api/transfer';

            $response = Http::post($apiUrl, [
                'domain_name' => $domainName,
                'auth_code' => $authCode,
                'purchase_price' => $purchasePrice,
            ]);

            if ($response->successful()) {
                return response()->json(['success' => 'Domaine transféré avec succès.']);
            } else {
                $statusCode = $response->status();
                $errorMessage = 'Erreur lors du transfert du domaine. Statut : ' . $statusCode;
                Log::error($errorMessage);
                return response()->json(['error' => $errorMessage], $statusCode);
            }
        } catch (\Throwable $th) {
            $errorMessage = 'Une erreur inattendue s\'est produite : ' . $th->getMessage();
            Log::error('Exception Error: ' . $errorMessage);
            return response()->json(['error' => $errorMessage], 500);
        }
    }
}
