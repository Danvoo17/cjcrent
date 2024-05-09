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
        Schema::create('vehiculo_pedido', function (Blueprint $table) {
            $table->foreignid('id_vehiculo')->references('id_vehiculo')->on('vehiculo');
            $table->foreignid('id_pedido')->references('id_pedido')->on('pedido');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculo_pedido');
    }
};
