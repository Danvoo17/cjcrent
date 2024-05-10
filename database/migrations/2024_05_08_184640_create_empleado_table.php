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
        Schema::create('empleado', function (Blueprint $table) {
            $table->id('id_emp');
            $table->string('nombre', 40);
            $table->string('apellido', 40);
            $table->string('telefono', 12);
            $table->string('cedula', 12);
            $table->string('email', 40);
            $table->string('direccion', 70);
            $table->float('saldo');
            $table->foreignid('id_cargo')->references('id_cargo')->on('cargo');
            $table->foreignid('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado');
    }
};
