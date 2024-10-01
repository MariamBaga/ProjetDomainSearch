<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Domain;
use App\Models\Payment;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

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



    public function index()
    {
        $users = User::all(); // Récupère tous les utilisateurs
        return view('Admin.userlist', compact('users'));
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
        $totalDomains = Domain::where('user_email', $user->email)->count(); // Compte le nombre de domaines de l'utilisateur connecté

        // Récupérer le total des paiements effectués par l'utilisateur
        $totalTransactions = Payment::where('user_email', $user->email)->sum('amount'); // Assurez-vous que le champ user_id existe dans la table payments

        return view('User.index', compact('totalDomains', 'totalTransactions'));
    }




    public function profil()

    {
        // Récupérer la liste des pays (pour une fonctionnalité future)

        return view('User.profil');

    }
    public function transactionHistory()
    {
        // Récupérer toutes les transactions de l'utilisateur connecté
        $transactions = DB::table('payments')
            ->where('user_email', auth()->user()->email) // Filtrer par email de l'utilisateur connecté
            ->get();

        return view('User.transactions.historiques', compact('transactions'));
    }

    public function transactionDetails($id)
    {
        // Récupérer la transaction spécifique avec les éléments de la commande
        $transaction = Payment::with('order.items')
            ->where('user_email', auth()->user()->email) // Filtrer par email de l'utilisateur connecté
            ->find($id);

        Log::info('Transaction récupérée : ', ['transaction' => $transaction]);

        if (!$transaction) {
            return redirect()->route('user.transaction.history')->with('error', 'Transaction non trouvée.');
        }

        // Récupérer les éléments de la commande
        $orderItems = $transaction->order ? $transaction->order->items : collect();

        return view('User.transactions.details', compact('transaction', 'orderItems'));
    }

    public function destroyTransaction($id)
    {
        // Supprimer uniquement les transactions de l'utilisateur connecté
        DB::table('payments')
            ->where('id', $id)
            ->where('user_email', auth()->user()->email) // Filtrer par email de l'utilisateur connecté
            ->delete();

        return redirect()->route('user.transaction.history')->with('success', 'Transaction supprimée avec succès.');
    }

}
