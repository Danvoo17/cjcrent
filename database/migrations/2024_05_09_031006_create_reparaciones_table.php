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
        Schema::create('reparaciones', function (Blueprint $table) {
            $table->id('id_reparacion');
            $table->text('descripcion');
            $table->date('fecha');
            $table->float('costo');
            $table->foreignid('id_vehiculo')->references('id_vehiculo')->on('vehiculo');
            $table->foreignid('id_emp')->references('id_emp')->on('empleado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reparaciones');
    }
};
