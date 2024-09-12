<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Domain;

class UserController extends Controller
{
    public function userDashboard()
    {
        // Récupérer les utilisateurs pour les afficher dans la vue
        $users = User::all(); // ou une logique plus spécifique si nécessaire
        $roles = Role::all();
        $permissions = Permission::all();

        return view('Admin.users', compact('users', 'roles', 'permissions'));
    }

    public function updateInfo(Request $request)
    {
        $user = auth()->user();
        // Implémentez la logique pour mettre à jour les informations de l'utilisateur
        // ...

        return redirect()->back()->with('success', 'Vos informations ont été mises à jour avec succès.');
    }



    public function userCompte()
    {

        $user = auth()->user(); // Récupérer l'utilisateur connecté

        // Récupérer le nombre de domaines achetés par l'utilisateur connecté
        $totalDomains = Domain::where('user_id', $user->id)->count(); // Compte le nombre de domaines de l'utilisateur connecté
        //$totalTransactions = Transaction::where('user_id', $user->id)->count(); // Compte le nombre de transactions de l'utilisateur connecté

        return view('User.index', compact('totalDomains'));

    }



    public function profil()

    {
        // Récupérer la liste des pays (pour une fonctionnalité future)

        return view('User.profil');

    }
}
