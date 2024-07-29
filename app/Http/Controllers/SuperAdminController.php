<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SuperAdminController extends Controller
{
    public function index()
    {
        $users = User::all(); // Récupérer tous les utilisateurs
        $roles = Role::all();
        $permissions = Permission::all();

        return view('Admin.superadmin', compact('users', 'roles', 'permissions'));
    }

    public function updateRole(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $role = $request->input('role');

        // Supprimer tous les rôles actuels et attribuer le rôle sélectionné
        $user->syncRoles([$role]);

        return redirect()->back()->with('success', 'Le rôle de l\'utilisateur a été mis à jour avec succès.');
    }

    public function updatePermissions(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $permissions = $request->input('permissions', []);

        // Synchroniser les permissions de l'utilisateur
        $user->syncPermissions($permissions);

        return redirect()->back()->with('success', 'Les permissions de l\'utilisateur ont été mises à jour avec succès.');
    }
}
