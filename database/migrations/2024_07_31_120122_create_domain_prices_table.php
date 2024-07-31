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
       // database/migrations/xxxx_xx_xx_create_domain_prices_table.php

  Schema::create('domain_prices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('transfer_price', 8, 2);
            $table->decimal('register_price', 8, 2);
            $table->decimal('renew_price', 8, 2);
            $table->string('currency')->default('FCFA'); // Ajouter une colonne pour la devise
            $table->timestamps();
        });
    }



    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domain_prices');
    }
};
