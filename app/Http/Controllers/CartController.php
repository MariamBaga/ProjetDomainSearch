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
        $cart = session()->get('cart', []);

        if (Auth::check()) {
            $userCart = Cart::where('user_id', Auth::id())->first();
            if ($userCart) {
                $cart = $userCart->items;
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

    //     if ($domain->status != 'available') { // Correct status check
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
    //             ['items' => $cart]
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

        // Débogage : voir ce qui est stocké dans la session
        if (empty($searchedDomains)) {
            return redirect()->back()->with('error', 'Aucun domaine trouvé dans la session. Veuillez effectuer une recherche.');
        }

        $domainId = $request->input('domain_id');
        $domain = collect($searchedDomains)->firstWhere('id', $domainId);

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
            'duration' => 1,
        ];

        session()->put('cart', $cart);

        if (Auth::check()) {
            Cart::updateOrCreate(['user_id' => Auth::id()], ['items' => $cart]);
        }

        return redirect()->route('domain.fetch')->with('success', 'Domaine ajouté au panier avec succès!');
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
                    $userCart->items = $cart;
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
                    $userCart->items = $cart;
                    $userCart->save();
                }
            }

            return redirect()->route('cart')->with('success', 'Panier mis à jour avec succès!');
        } else {
            return redirect()->route('cart')->with('error', 'Aucune donnée de domaine valide reçue.');
        }
    }
}
