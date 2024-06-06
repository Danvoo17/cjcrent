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
        Schema::create('incidente', function (Blueprint $table) {
            $table->id('id_incidente');
            $table->text('descripcion');
            $table->date('fecha');
            $table->time('hora');
            $table->foreignid('id_vehiculo')->references('id_vehiculo')->on('vehiculos');
            $table->foreignid('id_cliente')->references('id_cliente')->on('clientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidente');
    }
};
