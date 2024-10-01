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
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // ID de l'utilisateur effectuant l'action
            $table->string('action'); // Type d'action (ajout, suppression, modification, etc.)
            $table->text('description'); // Description de l'action effectuée
            $table->string('ip_address')->nullable(); // Adresse IP de l'utilisateur
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
