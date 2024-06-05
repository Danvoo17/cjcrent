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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id('id_vehiculo');
            $table->string('matricula', 12)->unique();
            $table->float('precio');
            $table->string('año', 4);
            $table->string('color', 20);
            $table->string('estado', 20);
            $table->string('pasajeros', 2);
            $table->string('puertas', 2);
            $table->string('maletas', 2);
            $table->string('tipo', 20);
            $table->string('traccion', 20);
            $table->string('transmision', 10);
            $table->string('motor', 16);
            $table->text('opciones')->nullable();
            $table->binary('imagen')->nullable();
            $table->foreignid('id_modelo')->references('id_modelo')->on('modelo');
            $table->foreignid('id_seguro')->references('id_seguro')->on('seguro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculo');
    }
};
