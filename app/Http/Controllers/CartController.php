<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Domain;
use App\Models\Cart;

class CartController extends Controller
{
    public function view()
    {
        // Récupérer le panier de la session
        $cart = session()->get('cart', []);

        if (Auth::check()) {
            $userCart = Cart::where('user_id', Auth::id())->first();
            if ($userCart) {
                // Vérifier si les données sont déjà un tableau
                $items = $userCart->items;
                if (is_string($items)) {
                    $cart = json_decode($items, true); // Décoder le JSON uniquement si c'est une chaîne
                    if (!is_array($cart)) {
                        $cart = []; // Assurez-vous que le panier est toujours un tableau
                    }
                } else {
                    // Si ce n'est pas une chaîne, traiter comme un tableau directement
                    $cart = is_array($items) ? $items : [];
                }
                session(['cart' => $cart]);
            }
        }

        return view('Cart.view', compact('cart'));
    }

    // public function add(Request $request)
    // {
    //     $request->validate([
    //         'domain_id' => 'required|exists:domains,id',
    //     ]);

    //     $domain = Domain::findOrFail($request->input('domain_id'));

    //     if ($domain->status != 'available') { // Vérification correcte du statut
    //         return redirect()->back()->with('error', 'Le domaine n\'est pas disponible.');
    //     }

    //     $cart = session()->get('cart', []);

    //     $cart[$domain->id] = [
    //         "name" => $domain->name,
    //         "extension" => $domain->extension,
    //         "price" => $domain->price,
    //         "duration" => 1, // Exemple, 1 an
    //     ];

    //     session()->put('cart', $cart);

    //     if (Auth::check()) {
    //         Cart::updateOrCreate(
    //             ['user_id' => Auth::id()],
    //             ['items' => json_encode($cart)] // Encoder le panier en JSON
    //         );
    //     }

    //     return redirect()->route('search.domain')->with('success', 'Domaine ajouté au panier avec succès!');
    // }





    public function add(Request $request)
    {
        // Valider que l'ID du domaine est fourni
        $request->validate([
            'domain_id' => 'required',
        ]);

        // Récupérer les domaines recherchés stockés en session
        $searchedDomains = session()->get('searched_domains', []);

        // Vérifier si la session contient des domaines
        if (empty($searchedDomains)) {
            return redirect()->back()->with('error', 'Aucun domaine trouvé dans la session. Veuillez effectuer une recherche.');
        }

        // Récupérer l'ID du domaine depuis la requête
        $domainId = $request->input('domain_id');

        // Vérifier si le domaine existe dans les résultats recherchés
        $domain = collect($searchedDomains)->firstWhere('id', $domainId);

        // Si le domaine n'est pas trouvé, retourner une erreur
        if (!$domain) {
            return redirect()->back()->with('error', 'Domaine non trouvé dans les résultats de recherche.');
        }

        // Vérifier si le domaine est disponible
        if ($domain['status'] != 'available') {
            return redirect()->back()->with('error', 'Le domaine n\'est pas disponible.');
        }

        // Ajouter le domaine au panier
        $cart = session()->get('cart', []);
        $cart[$domainId] = [
            'name' => $domain['name'],
            'extension' => $domain['extension'],
            'price' => $domain['price'],
            'duration' => 1, // Par exemple, 1 an
        ];

        // Mettre à jour la session avec le panier
        session()->put('cart', $cart);

        // Si l'utilisateur est connecté, mettre à jour ou créer un panier en base de données
        if (Auth::check()) {
            Cart::updateOrCreate(['user_id' => Auth::id()], ['items' => json_encode($cart)]); // Encoder en JSON avant de stocker en base
        }

        // Redirection avec succès
        return redirect()->back()->with('success', 'Domaine ajouté au panier avec succès!');
    }

    public function remove($domainId)
    {
        $cart = session()->get('cart', []);

        if (is_string($cart)) {
            $cart = json_decode($cart, true);
        }

        if (!is_array($cart)) {
            $cart = [];
        }

        if (isset($cart[$domainId])) {
            unset($cart[$domainId]);
            session()->put('cart', $cart);

            if (Auth::check()) {
                $userCart = Cart::where('user_id', Auth::id())->first();
                if ($userCart) {
                    $userCart->items = json_encode($cart); // Encoder les données du panier en JSON
                    $userCart->save();
                }
            }
        }

        return redirect()->route('cart')->with('success', 'Domaine retiré du panier avec succès!');
    }

    public function update(Request $request)
    {
        // Validation des données envoyées
        $request->validate([
            'domains.*.duration' => 'required|integer|min:1|max:10', // Valider la durée pour chaque domaine
        ]);

        // Récupérer le panier de la session
        $cart = session()->get('cart', []);

        // Vérifier si 'domains' est fourni et est un tableau
        $domains = $request->input('domains', []);

        if (is_array($domains)) {
            foreach ($domains as $domainId => $data) {
                if (isset($cart[$domainId])) {
                    $cart[$domainId]['duration'] = $data['duration'];
                }
            }

            // Mettre à jour le panier dans la session
            session()->put('cart', $cart);

            // Mettre à jour le panier de l'utilisateur connecté en base de données
            if (Auth::check()) {
                $userCart = Cart::where('user_id', Auth::id())->first();
                if ($userCart) {
                    $userCart->items = json_encode($cart); // Encoder les données du panier en JSON
                    $userCart->save();
                }
            }

            return redirect()->route('cart')->with('success', 'Panier mis à jour avec succès!');
        } else {
            return redirect()->route('cart')->with('error', 'Aucune donnée de domaine valide reçue.');
        }
    }
}
