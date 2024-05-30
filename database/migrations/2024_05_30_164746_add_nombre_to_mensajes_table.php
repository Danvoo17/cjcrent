<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('mensajes', function (Blueprint $table) {
        $table->string('nombre', 255)->nullable();
    });
}

public function down()
{
    Schema::table('mensajes', function (Blueprint $table) {
        $table->dropColumn('nombre');
    });
}

};
