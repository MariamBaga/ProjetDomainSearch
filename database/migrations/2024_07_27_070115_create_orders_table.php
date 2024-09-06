<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('email')->default('example@example.com');
            $table->string('phone');
            $table->string('first_name')->nullable();
$table->string('last_name')->nullable();

            $table->unsignedBigInteger('country_id'); // Ajoute la colonne country_id
    $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade'); // Ajoute la contrainte de clé étrangère




            $table->string('company_name')->nullable();
            $table->string('address');
            $table->string('city');
            $table->enum('payment_method', ['orange_money']); // Ajouter d'autres méthodes de paiement si nécessaire
            $table->decimal('total_amount', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
