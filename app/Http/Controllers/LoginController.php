<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\RateLimiter;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.index');
    }

    public function loginpost(Request $request)
    {
        // Validation des informations d'identification
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Clé pour le limiteur de tentatives
        $key = 'login-attempts:' . $request->ip() . '|' . $request->input('email');

        // Vérifier si l'utilisateur est bloqué
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            return back()->withErrors([
                'email' => "Trop de tentatives de connexion. Réessayez dans $seconds secondes.",
            ])->with('seconds', $seconds);
        }

        // Tenter de connecter l'utilisateur
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Régénérer la session pour éviter le détournement

            // Réinitialiser le compteur de tentatives après une connexion réussie
            RateLimiter::clear($key);

            

            // Charger le panier de l'utilisateur
            $userCart = Cart::where('user_id', Auth::id())->first();
            if ($userCart) {
                // Stocker les éléments du panier dans la session
                session(['cart' => $userCart->items]);
            } else {
                // Si l'utilisateur n'a pas de panier, s'assurer qu'il est oublié
                session()->forget('cart');
            }

            // Redirection après la connexion réussie
            return redirect()->intended('home');
        }

        // Incrémenter le compteur de tentatives après un échec
        RateLimiter::hit($key);

        // Retourner une erreur si la connexion échoue
        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect.',
        ])->onlyInput('email');
    }
}
