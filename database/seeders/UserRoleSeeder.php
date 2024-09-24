<?php

// database/seeders/UserRoleSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        // Effacer les données existantes dans la table user_roles
        DB::table('user_roles')->truncate();

        // Assigner les rôles aux utilisateurs dans la table user_roles
        DB::table('user_roles')->insert([
            ['user_id' => 3, 'role' => 'user'],
            ['user_id' => 2, 'role' => 'admin'],
            ['user_id' => 1, 'role' => 'superadmin'],
        ]);
    }
}
