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
        Schema::create('webhooks', function (Blueprint $table) {
            $table->id();
            $table->string('event'); // Type d'événement, par exemple 'payment_received'
            $table->json('payload'); // Données du webhook
            $table->string('status'); // Statut de traitement, par exemple 'processed'
            $table->unsignedBigInteger('domain_id')->nullable(); // ID du domaine associé
            $table->unsignedBigInteger('order_id')->nullable(); // ID de la commande associée
            $table->timestamp('received_at')->useCurrent(); // Horodatage de la réception du webhook
            $table->timestamps();

            // Index pour les colonnes domain_id et order_id
            $table->index('domain_id');
            $table->index('order_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webhooks');
    }
};
