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
        Schema::create('seguro', function (Blueprint $table) {
            $table->id('id_seguro');
            $table->string('num_poliza', 30)->unique();
            $table->string('tipo', 20);
            $table->text('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->float('costo');
            $table->foreignid('id_aseg')->references('id_aseg')->on('aseguradora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguros');
    }
};
