<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DomainSearchApiController extends Controller
{

        /**
         * Récupérer les domaines depuis l'API externe et les passer à la vue Blade.
         *
         * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
         */
        public function fetchDomains()
        {
            try {
                // URL de l'API externe
                $apiUrl = 'http://api.mane.com/api/domains'; // Remplace par l'URL correcte de l'API

                // Appel à l'API pour obtenir les domaines
                $response = Http::get($apiUrl);

                if ($response->successful()) {
                    $domains = $response->json();

                    // Adapter la structure des données si nécessaire
                    $formattedDomains = collect($domains)->map(function ($domain) {
                        return [
                            'id' => $domain['id'],
                            'name' => $domain['name'],
                            'extension' => $domain['extension'],
                            'status' => $domain['status'],
                            'price' => $domain['price'],
                            'duration' => $domain['duration'],
                        ];
                    });

                    // Passer les domaines formatés à la vue Blade
                    return view('Domain.index', ['domains' => $formattedDomains]);
                } else {
                    // Gérer les erreurs si la réponse de l'API n'est pas réussie
                    return response()->json([
                        'error' => 'Impossible de récupérer les domaines depuis l\'API. Statut : ' . $response->status()
                    ], 500);
                }
            } catch (\Throwable $th) {
                // Gérer les exceptions et retourner une réponse JSON avec le message d'erreur
                return response()->json([
                    'error' => 'Une erreur inattendue s\'est produite : ' . $th->getMessage()
                ], 500);
            }
        }
    }
