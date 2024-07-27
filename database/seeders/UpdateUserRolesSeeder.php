<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UpdateUserRolesSeeder extends Seeder
{
    public function run()
    {
        // Trouvez les utilisateurs par leur ID ou autre critère
        $userToAdmin = User::find(4);  // Exemple: ID 3 devient admin
        $userToSuperAdmin = User::find(5);  // Exemple: ID 4 devient superadmin

        // Vérifiez si les utilisateurs existent et assignez les nouveaux rôles
        if ($userToAdmin) {
            // Supprimez tous les rôles actuels avant d'ajouter un nouveau rôle
            $userToAdmin->syncRoles(['admin']);
        }

        if ($userToSuperAdmin) {
            // Supprimez tous les rôles actuels avant d'ajouter un nouveau rôle
            $userToSuperAdmin->syncRoles(['superadmin']);
        }
    }
}
