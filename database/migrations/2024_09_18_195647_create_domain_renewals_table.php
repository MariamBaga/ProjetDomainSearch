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
            $table->string('domain_name'); // Le nom du domaine
            $table->integer('years'); // Durée du renouvellement en années
            $table->date('current_expiration'); // Date d'expiration actuelle du domaine
            $table->decimal('renewal_price', 10, 2); // Prix du renouvellement
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
