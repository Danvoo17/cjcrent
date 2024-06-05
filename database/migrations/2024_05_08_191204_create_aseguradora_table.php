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
        Schema::create('aseguradoras', function (Blueprint $table) {
            $table->id('id_aseg');
            $table->string('nombre', 40);
            $table->string('telefono', 12);
            $table->string('email', 40);
            $table->string('direccion', 70);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aseguradoras');
    }
};
