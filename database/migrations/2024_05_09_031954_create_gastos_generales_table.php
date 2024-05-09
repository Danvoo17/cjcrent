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
        Schema::create('gastos_generales', function (Blueprint $table) {
            $table->id('id_gasto');
            $table->foreignid('id_vehiculo')->references('id_vehiculo')->on('vehiculo');
            $table->foreignid('id_pedido')->references('id_pedido')->on('pedido');
            $table->foreignid('id_reparacion')->references('id_reparacion')->on('reparaciones');
            $table->foreignid('id_mantenimiento')->references('id_mantenimiento')->on('mantenimiento_preventivo');
            $table->foreignid('id_gastloc')->references('id_gastloc')->on('gastos_local');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos_generales');
    }
};
