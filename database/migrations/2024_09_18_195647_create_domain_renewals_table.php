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
        Schema::create('domain_renewals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('domain_id');
            $table->string('domain_name');
            $table->integer('renewal_duration'); // Durée en années
            $table->decimal('renewal_price', 10, 2); // Prix du renouvellement
            $table->string('user_email'); // Email de l'utilisateur
            $table->string('status')->default('pending'); // Statut du renouvellement (pending, completed, etc.)
           
            $table->timestamps();

            // Foreign key constraint to the domain table
            $table->foreign('domain_id')->references('id')->on('domains')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domain_renewals');
    }
};
