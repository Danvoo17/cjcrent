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
        Schema::create('mantenimiento', function (Blueprint $table) {
            $table->id('id_mantenimiento');
            $table->string('tipo', 30);
            $table->text('descripcion');
            $table->date('fecha');
            $table->float('costo');
            $table->foreignid('id_vehiculo')->references('id_vehiculo')->on('vehiculos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mantenimiento_preventivo');
    }
};
