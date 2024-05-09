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
        Schema::create('mensaje', function (Blueprint $table) {
            $table->id('id_mensaje');
            $table->string('asunto', 30);
            $table->text('mensaje');
            $table->foreignid('id_cliente')->references('id_cliente')->on('cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensaje');
    }
};
