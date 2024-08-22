<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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

    public function domains()
    {
        return $this->hasMany(Domain::class);
    }

    public function userCompte()
    {
        
        return view('User.index');

    }



    public function profil()
    {
        return view('User.profil');

    }
}
