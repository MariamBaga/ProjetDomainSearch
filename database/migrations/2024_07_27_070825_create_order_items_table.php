<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
        $table->unsignedBigInteger('order_id');
        $table->string('domain_name'); // Stocker le nom du domaine
        $table->string('domain_extension'); // Stocker l'extension du domaine
        $table->decimal('price', 8, 2);
        $table->integer('duration'); // Durée en années
        $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        $table->timestamps();



        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
