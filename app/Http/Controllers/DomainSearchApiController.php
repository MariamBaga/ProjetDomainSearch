<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DomainSearchApiController extends Controller
{
    //

     /**
     * Récupérer les domaines depuis l'API de APIDomaine.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function fetchDomains()
    {
        // URL de l'API de APIDomaine
        $apiUrl = 'http://localhost:8000/api/domains'; // Remplace par l'URL correcte de ton API

        // Appel à l'API de APIDomaine pour obtenir les domaines
        $response = Http::get($apiUrl);

        if ($response->successful()) {
            $domains = $response->json();
            // Passer les domaines à la vue Blade
            return view('domains.index', ['domains' => $domains]);
        } else {
            // Gérer les erreurs et retourner une réponse JSON avec le message d'erreur
            return response()->json(['error' => 'Unable to fetch domains'], 500);
        }
    }
}
