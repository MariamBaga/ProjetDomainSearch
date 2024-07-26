<?php

// app/Http/Controllers/Admin/UserController.php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role; // Importez la classe Role

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();

        return view('Admin.users', compact('users', 'roles'));
    }

    public function updateRole(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $role = $request->input('role');

        // Remove all current roles and assign the selected role
        $user->syncRoles([$role]);

        return redirect()->back()->with('success', 'User role updated successfully.');
    }
}

