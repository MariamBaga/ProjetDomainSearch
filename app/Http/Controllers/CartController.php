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

    public function add(Request $request)
    {
        $request->validate([
            'domain_id' => 'required|exists:domains,id',
        ]);

        $domain = Domain::findOrFail($request->input('domain_id'));

        if ($domain->status != 'available') { // Correct status check
            return redirect()->back()->with('error', 'Le domaine n\'est pas disponible.');
        }

        $cart = session()->get('cart', []);

        $cart[$domain->id] = [
            "name" => $domain->name,
            "extension" => $domain->extension,
            "price" => $domain->price,
            "duration" => 1, // Exemple, 1 an
        ];

        session()->put('cart', $cart);

        if (Auth::check()) {
            Cart::updateOrCreate(
                ['user_id' => Auth::id()],
                ['items' => $cart]
            );
        }

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
                    $userCart->items = $cart;
                    $userCart->save();
                }
            }
        }

        return redirect()->route('cart')->with('success', 'Domaine retiré du panier avec succès!');
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart', []);

        foreach ($request->input('domains') as $domainId => $data) {
            if (isset($cart[$domainId])) {
                $cart[$domainId]['duration'] = $data['duration'];
            }
        }

        session()->put('cart', $cart);

        if (Auth::check()) {
            $userCart = Cart::where('user_id', Auth::id())->first();
            if ($userCart) {
                $userCart->items = $cart;
                $userCart->save();
            }
        }

        return redirect()->route('cart')->with('success', 'Panier mis à jour avec succès!');
    }
}
