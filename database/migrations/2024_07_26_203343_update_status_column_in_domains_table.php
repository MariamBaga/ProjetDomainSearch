<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStatusColumnInDomainsTable extends Migration
{
    public function up()
    {
        // Supprimer la colonne 'status' si elle existe déjà
        if (Schema::hasColumn('domains', 'status')) {
            Schema::table('domains', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }

        // Ajouter la colonne 'status' avec les nouvelles valeurs 'enum'
        Schema::table('domains', function (Blueprint $table) {
            $table->enum('status', ['available', 'unavailable', 'reserved'])->default('available');
        });
    }

    public function down()
    {
        // Supprimer la colonne 'status' si elle existe
        if (Schema::hasColumn('domains', 'status')) {
            Schema::table('domains', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }

        // Revenir à l'ancienne colonne 'status' si vous en avez une
        // Ajouter une nouvelle colonne 'status' en chaîne de caractères
        Schema::table('domains', function (Blueprint $table) {
            $table->string('status')->default('available');
        });
    }
}
