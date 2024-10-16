<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Domain;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;



class AdminController extends Controller
{
    public function role()
{
    // Récupérer tous les utilisateurs
    $users = User::all(); // On récupère tous les utilisateurs
    $roles = Role::all(); // On récupère tous les rôles
    return view('Admin.admin', compact('users', 'roles'));
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
 public function profil_Admin(){
            return view('Admin.profil_admin');
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

    public function admin_domains_list(){

            $domainsDirect = DB::table('domains')
            ->join('users', 'domains.user_email', '=', 'users.email') // Utiliser 'user_email' pour la jointure
            ->select('domains.*', 'users.email')
            ->get();


                //dd($domainsDirect);
            return view('Admin.Domain_list', compact('domainsDirect'));
        }

        public function create()
        {
            return view('Admin.creerutilisateur'); // Créez une vue pour le formulaire
        }


        public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'phone' => 'nullable|string',
        'country' => 'nullable|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
        'phone' => $validatedData['phone'],
        'country' => $validatedData['country'],
        'photo' => $validatedData['photo'] ? $validatedData['photo']->store('photos') : null,
    ]);

    return redirect()->route('admin.user.list')->with('success', 'Utilisateur ajouté avec succès.');
}






public function edit($id)
{
    $user = User::findOrFail($id);
    return view('Admin.modifierutilisateur', compact('user')); // Créez une vue pour le formulaire d'édition
}






public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8|confirmed',
        'phone' => 'nullable|string',
        'country' => 'nullable|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];

    if (isset($validatedData['password']) && $validatedData['password']) {
        $user->password = bcrypt($validatedData['password']);
    }

    $user->phone = $validatedData['phone'];
    $user->country = $validatedData['country'];

    if (isset($validatedData['photo'])) {
        $user->photo = $validatedData['photo']->store('photos');
    }

    $user->save();

    return redirect()->route('admin.user.list')->with('success', 'Utilisateur modifié avec succès.');
}






public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('admin.user.list')->with('success', 'Utilisateur supprimé avec succès.');
}
public function transactionHistory()
{
    $transactions = DB::table('payments')->get(); // Récupérer toutes les transactions
    return view('Admin.transaction.historique', compact('transactions'));
}


public function transactionDetails($id)
{
    $transaction = Payment::with('order.items')->find($id); // Inclure les items de la commande

    Log::info('Transaction récupérée : ', ['transaction' => $transaction]);

    if (!$transaction) {
        return redirect()->route('admin.transaction.history')->with('error', 'Transaction non trouvée.');
    }

    // Récupérer les éléments de la commande
    $orderItems = $transaction->order ? $transaction->order->items : collect();

    return view('Admin.transaction.details', compact('transaction', 'orderItems'));
}







public function destroyTransaction($id)
{

    DB::table('payments')->where('id', $id)->delete();
    return redirect()->route('admin.transaction.history')->with('success', 'Transaction supprimée avec succès.');
}


    }

