<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Models\Country;
use Spatie\Permission\Models\Role; // Importez la classe Role
use Exception;
use Illuminate\Support\Facades\Log;



class RegisterController extends Controller
{
    public function index(){

        // Récupère la liste des pays (exemple pour une fonctionnalité future)
        $countries = Country::all();
        return view('Register.index',compact('countries'));
    }

    public function registerpost(RegisterRequest $request){

        try {
            $photoPath = $request->file('photo') ? $request->file('photo')->store('photos', 'public') : null;

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'country' => $request->country,
                'photo' => $photoPath,
                'password' => Hash::make($request->password),
            ]);
// Assign the "user" role to the newly registered user
$user->assignRole('user');

return redirect()->route('login')->with('success', 'Inscrit avec succès! Connectez-vous s\'il vous plaît.');
} catch (Exception $e) {
Log::error('Registration failed: ' . $e->getMessage());
return redirect()->back()->with('error', 'Inscription échouée. Veuillez réessayer..');
}
}
}
