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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('user_email')->after('user_id'); // Ajouter la colonne user_email après user_id
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('user_email'); // Supprimer la colonne user_email si on annule la migration
        });
    }
};
