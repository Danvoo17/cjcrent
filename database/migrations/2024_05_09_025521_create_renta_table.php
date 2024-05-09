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
        Schema::create('renta', function (Blueprint $table) {
            $table->id('id_renta');
            $table->string('ub_recogida', 70);
            $table->string('ub_devuelta', 70);
            $table->date('fecha_recogida');
            $table->time('hora_recogida');
            $table->date('fecha_devuelta');
            $table->time('hora_devuelta');
            $table->float('costo');
            $table->string('estado', 12);
            $table->foreignid('id_vehiculo')->references('id_vehiculo')->on('vehiculo');
            $table->foreignid('id_cliente')->references('id_cliente')->on('cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renta');
    }
};
