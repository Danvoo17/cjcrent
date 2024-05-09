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
        Schema::create('factura', function (Blueprint $table) {
            $table->id('cod_factura');
            $table->string('metodo_pago', 8);
            $table->datetime('fecha');
            $table->text('descripcion');
            $table->float('itbis');
            $table->float('descuentos');
            $table->float('monto_total');
            $table->foreignid('id_renta')->references('id_renta')->on('renta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura');
    }
};
