<?php

namespace Database\Seeders;


use App\Models\User;
use Spatie\Permission\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Vérifier si l'utilisateur 'Super Admin' existe déjà
        $superAdminEmail = 'superadmin@example.com';

        if (!User::where('email', $superAdminEmail)->exists()) {
            $superAdmin = User::create([
                'name' => 'Super Admin',
                'email' => $superAdminEmail,
                'password' => bcrypt('password'), // Mot de passe crypté
                'phone' => '1234567890000',
                'country' => 'Country',
            ]);
            $superAdmin->assignRole('superadmin');
        }

        // Vérifier si l'utilisateur 'Admin' existe déjà
        $adminEmail = 'admin@example.com';

        if (!User::where('email', $adminEmail)->exists()) {
            $admin = User::create([
                'name' => 'Admin User',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
                'phone' => '0987654321',
                'country' => 'Country',
            ]);
            $admin->assignRole('admin');
        }

        // Vérifier si l'utilisateur 'Normal User' existe déjà
        $userEmail = 'user@example.com';

        if (!User::where('email', $userEmail)->exists()) {
            $user = User::create([
                'name' => 'Normal User',
                'email' => $userEmail,
                'password' => bcrypt('password'),
                'phone' => '1122334455',
                'country' => 'Country',
            ]);
            $user->assignRole('user');
    }

}
}
