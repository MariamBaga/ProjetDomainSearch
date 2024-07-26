<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart; // Assurez-vous que ceci est inclus

class LoginController extends Controller
{
    //
    public function index(){

        return view('Login.index');

    }

    public function loginpost(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);



        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Charger le panier de l'utilisateur
            $userCart = Cart::where('user_id', Auth::id())->first();
            if ($userCart) {
                session(['cart' => $userCart->items]);
            } else {
                session()->forget('cart');
            }

            return redirect()->intended('home');
        }


        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect.',
        ])->onlyInput('email');



    }


}
