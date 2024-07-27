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
        // Vérifiez et créez les rôles si nécessaire
        $userRole = Role::firstOrCreate(['name' => 'user']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $superAdminRole = Role::firstOrCreate(['name' => 'superadmin']);

        // Créez les permissions
        $permissions = [
            'view home',
            'manage users',
            'manage domains',
            // Ajoutez plus de permissions si nécessaire
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Attribuez les permissions aux rôles
        $userRole->givePermissionTo('view home');
        $adminRole->givePermissionTo(['view home', 'manage users']);
        $superAdminRole->givePermissionTo(Permission::all());
    }
}
