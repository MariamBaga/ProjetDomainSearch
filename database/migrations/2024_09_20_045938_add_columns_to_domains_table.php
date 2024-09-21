<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
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
            // Ajouter les nouvelles colonnes
            $table->date('purchase_date')->nullable()->after('status'); // Date d'achat
            $table->date('expiration_date')->nullable()->after('purchase_date'); // Date d'expiration
            $table->json('api_response')->nullable()->after('expiration_date'); // Réponse de l'API

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

            // Supprimer les colonnes ajoutées
            if (Schema::hasColumn('domains', 'purchase_date')) {
                $table->dropColumn('purchase_date');
            }
            if (Schema::hasColumn('domains', 'expiration_date')) {
                $table->dropColumn('expiration_date');
            }
            if (Schema::hasColumn('domains', 'api_response')) {
                $table->dropColumn('api_response');
            }
        });
    }

};
