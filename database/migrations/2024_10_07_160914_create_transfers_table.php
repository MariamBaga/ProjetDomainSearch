<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->string('domain_name');
            $table->string('auth_code');
            $table->decimal('purchase_price', 8, 2);
            $table->string('user_email'); // Pour identifier l'utilisateur
            $table->string('status')->default('pending'); // Statut du transfert (pending, completed, failed)
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
