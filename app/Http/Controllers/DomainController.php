<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
    use Illuminate\Support\Facades\Auth;

class DomainController extends Controller
{
    //



    public function indexTransfer($domainId){
         // Récupérer le domaine par ID
    $domain = Domain::where('id', $domainId)
    ->where('user_id', Auth::id())
    ->first();

// Vérifier si le domaine existe et appartient à l'utilisateur
if (!$domain) {
return redirect()->route('user.domains.list')->with('error', 'Domaine non trouvé ou vous n\'avez pas accès à ce domaine.');
}

// Passer le domaine à la vue
return view("Domain.Transfer", compact('domain'));
    }
 public function indexRenew($domainId){
         // Récupérer le domaine à renouveler
    $domain = Domain::where('id', $domainId)
    ->where('user_id', Auth::id())
    ->first();

// Vérifier si le domaine existe et appartient à l'utilisateur
if (!$domain) {
return redirect()->route('user.domains.list')->with('error', 'Domaine non trouvé ou vous n\'avez pas accès à ce domaine.');
}

return view("Domain.Renew", compact('domain'));
    }

public function User_domains_list(){

    // Récupérer l'utilisateur connecté
    $userEmail = Auth::user()->email;

    // Récupérer les domaines achetés par l'utilisateur en utilisant son email
    $domains = Domain::where('user_email', $userEmail)->get();

    return view("User.Domaine_liste", compact('domains'));

}


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
