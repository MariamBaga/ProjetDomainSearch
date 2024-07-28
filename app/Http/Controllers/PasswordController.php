<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller
{
    // Affiche le formulaire de réinitialisation du mot de passe
    public function showResetForm()
    {
        return view('Password.forget');
    }

    // Envoie le lien de réinitialisation du mot de passe
    public function sendResetLink(Request $request)
    {
        // Valide que l'email est présent et bien formaté
        $request->validate([
            'email' => 'required|email',
        ]);

        // Envoie le lien de réinitialisation du mot de passe
        $response = Password::sendResetLink($request->only('email'));

        // Retourne à la page précédente avec un message de succès ou d'erreur
        return $response == Password::RESET_LINK_SENT
            ? back()->with('status', __($response))
            : back()->withErrors(['email' => __($response)]);
    }
}
