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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('order_id'); // Stocke l'ID avec le préfixe 'ORD'
            $table->string('transaction_id')->nullable(); // ID de transaction fourni par l'API de paiement
            $table->decimal('amount', 10, 2); // Montant du paiement
            $table->string('status')->default('pending'); // Statut : pending, completed, failed
            $table->json('callback_data')->nullable(); // Données du callback sous forme JSON
            

            $table->timestamps();

            // Clé étrangère vers la table 'orders'

       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
