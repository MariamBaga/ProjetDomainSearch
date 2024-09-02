<?php

// database/migrations/xxxx_xx_xx_create_domains_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('extension');
            $table->decimal('price', 8, 2);  // Prix avec deux décimales
            $table->integer('duration');     // Durée en années
            // Vérifier si la colonne 'status' existe déjà pour éviter les doublons
            if (!Schema::hasColumn('domains', 'status')) {
                $table->enum('status', ['available', 'unavailable', 'reserved'])->default('available');
            }
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('domains');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


