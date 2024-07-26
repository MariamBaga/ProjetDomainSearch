<?php

// database/seeders/RolePermissionSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $userRole = Role::create(['name' => 'user']);
        $adminRole = Role::create(['name' => 'admin']);
        $superAdminRole = Role::create(['name' => 'superadmin']);

        // Create permissions
        $permissions = [
            'view home',
            'manage users',
            'manage domains',
            // Add more permissions as needed
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign permissions to roles
        $userRole->givePermissionTo('view home');
        $adminRole->givePermissionTo(['view home', 'manage users']);
        $superAdminRole->givePermissionTo(Permission::all());
    }
}

