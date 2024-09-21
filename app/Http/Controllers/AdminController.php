<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Domain;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;



class AdminController extends Controller
{
    public function rolepermission()
    {
        // Récupérer les utilisateurs avec le rôle 'user'
        $users = User::role('user')->get();
        $roles = Role::all();
        $permissions = Permission::all();

        return view('Admin.admin', compact('users', 'roles', 'permissions'));
    }


    public function Dashbaord() {
        // Récupérer le nombre total de domaines
        $totalDomains = Domain::whereNotNull('user_email')->count();

        // Récupérer le total des montants des transactions
        $totalTransactions = Payment::sum('amount'); // Assurez-vous d'importer le modèle Payment

        return view('Admin.Dashbaord', compact('totalDomains', 'totalTransactions'));
    }

    public function index(){
            return view('Admin.userlist');
        }

    // public function updateRole(Request $request, $id)
    // {
    //     $user = User::findOrFail($id);
    //     $role = $request->input('role');

    //     // Supprimer tous les rôles actuels et attribuer le rôle sélectionné
    //     $user->syncRoles([$role]);

    //     return redirect()->back()->with('success', 'Le rôle de l\'utilisateur a été mis à jour avec succès.');
    // }

    public function updatePermissions(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $permissions = $request->input('permissions', []);

        // Synchroniser les permissions de l'utilisateur
        $user->syncPermissions($permissions);

        return redirect()->back()->with('success', 'Les permissions de l\'utilisateur ont été mises à jour avec succès.');
    }

  public function admin_domains_list()
{
    // Récupérer les domaines en utilisant le champ user_email
    $domainsDirect = DB::table('domains')
        ->select('domains.*', 'domains.user_email') // Sélectionner les colonnes nécessaires
        ->get();

    return view('Admin.Domain_list', compact('domainsDirect'));
}




    }

