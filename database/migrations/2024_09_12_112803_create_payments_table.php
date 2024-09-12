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
            $table->string('order_id'); // Changement en string pour stocker l'ID avec le préfixe 'ORD'
            $table->string('transaction_id')->nullable();
            $table->string('status')->default('pending'); // Exemple : pending, completed, failed
            $table->decimal('amount', 10, 2)->nullable();
            $table->timestamps();

            // Clé étrangère vers la table 'orders'
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
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
