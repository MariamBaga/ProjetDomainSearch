<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;

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

        // Vérifie si l'email existe dans la base de données
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'Cet email n\'existe pas dans notre base de données.']);
        }

        // Envoie le lien de réinitialisation du mot de passe
        $response = Password::sendResetLink($request->only('email'));

        // Retourne à la page précédente avec un message de succès ou d'erreur
        return $response == Password::RESET_LINK_SENT
            ? back()->with('status', 'Le lien de réinitialisation a été envoyé à votre adresse email.')
            : back()->withErrors(['email' => 'Une erreur est survenue lors de l\'envoi du lien de réinitialisation.']);
    }
}
