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
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $key = 'login-attempts:' . $request->ip() . '|' . $request->input('email');

        // Vérifier si l'utilisateur est bloqué
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            return back()->withErrors([
                'email' => "Trop de tentatives de connexion. Réessayez dans $seconds secondes.",
            ])->with('seconds', $seconds);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Réinitialiser le compteur de tentatives après une connexion réussie
            RateLimiter::clear($key);

            // Charger le panier de l'utilisateur
            $userCart = Cart::where('user_id', Auth::id())->first();
            if ($userCart) {
                session(['cart' => $userCart->items]);
            } else {
                session()->forget('cart');
            }

            return redirect()->intended('home');
        }

        // Incrémenter le compteur de tentatives après un échec
        RateLimiter::hit($key);

        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect.',
        ])->onlyInput('email');
    }
}
