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
        Schema::create('agremiados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->string('NUP',10);
            $table->string('NUE',10);
            $table->string('RFC',13);
            $table->string('NSS');
            $table->string('fecha_nacimiento');
            $table->bigInteger('telefono',);
            $table->boolean('cuota');

            $table->unsignedBigInteger('id_genero');
            $table->foreign('id_genero')->references('id')->on('generos');

            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol')->references('id')->on('rols');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agremiados');
    }
};
