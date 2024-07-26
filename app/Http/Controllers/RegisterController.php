<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Spatie\Permission\Models\Role; // Importez la classe Role
use Exception;
use Illuminate\Support\Facades\Log;



class RegisterController extends Controller
{
    public function index(){
        return view('Register.index');
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

return redirect()->route('login')->with('success', 'Registration successful! Please login.');
} catch (Exception $e) {
Log::error('Registration failed: ' . $e->getMessage());
return redirect()->back()->with('error', 'Registration failed. Please try again.');
}
}
}
