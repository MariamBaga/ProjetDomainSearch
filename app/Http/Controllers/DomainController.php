<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;

class DomainController extends Controller
{
    //




    // DomainController.php
public function search(Request $request)
{
    // Valider les données de la requête
    $request->validate([
        'domain_name' => 'required|string',
        'domain_extension' => 'required|string|in:com,net,org,co,video,tech,design,xyz,io',
    ]);

    // Récupérer les données du formulaire
    $domainName = $request->input('domain_name');
    $extension = $request->input('domain_extension');

    $domains = Domain::where('extension', $extension)
                    ->where(function($query) use ($domainName) {
                        $query->where('name', 'like', "%$domainName%")
                              ->orWhere('name', 'like', "%$domainName%")
                              ->orWhere('name', 'like', "%$domainName%")
                              ->orWhere('name', 'like', "%$domainName%"); // Ajoutez des variantes si nécessaire
                    })
                    ->where('status', 'available')  // Filtrer par statut si nécessaire
                    ->get();

    // Retourner une vue avec les résultats de la recherche
    return view('Domain.index', [
        'domainName' => $domainName,
        'extension' => $extension,
        'domains' => $domains,

    ]);
}

}
