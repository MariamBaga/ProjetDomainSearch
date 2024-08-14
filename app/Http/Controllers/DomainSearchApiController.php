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
            $apiUrl = 'http://localhost:8001/domains'; // URL correcte de l'API locale

            // Appel à l'API pour obtenir les domaines
            $response = Http::get($apiUrl, [
                'domain_name' => $domainName,
                'domain_extension' => $domainExtension,
            ]);

            if ($response->successful()) {
                $domains = $response->json()['results'];

                // Adapter la structure des données si nécessaire
                $formattedDomains = collect($domains)->map(function ($domain) {
                    return [
                        'id' => $domain['domainName'] ?? 'N/A', // Utiliser `domainName` comme identifiant
                        'name' => $domain['sld'] ?? 'N/A',
                        'extension' => $domain['tld'] ?? 'N/A',
                        'status' => isset($domain['purchasable']) ? ($domain['purchasable'] ? 'available' : 'unavailable') : 'unknown',
                        'price' => $domain['purchasePrice'] ?? 'N/A',
                        'duration' => 1, // Fixé à 1 an pour cet exemple
                    ];
                });

                // Passer les domaines formatés à la vue Blade
                return view('Domain.indexApii', [
                    'domains' => $formattedDomains,
                    'domainName' => $domainName,
                    'extension' => $domainExtension,
                ]);
            } else {
                // Vérifier le statut de la réponse pour déterminer la cause de l'erreur
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

                // Log the error for debugging purposes
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
}
