<?php

// database/seeders/UserRoleSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        // Find users
        $user3 = User::find(3);
        $user4 = User::find(4);
        $user5 = User::find(5);

        // Assign roles
        if ($user3) {
            $user3->assignRole('user');
        }

        if ($user4) {
            $user4->assignRole('admin');
        }

        if ($user5) {
            $user5->assignRole('superadmin');
        }
    }
}
