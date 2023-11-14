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
            $table->increments('id_agremiado');
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->string('nombre');
            $table->string('sexo');
            $table->string('nup')->unique();
            $table->string('nue')->unique();
            $table->string('rfc')->unique();
            $table->string('nss')->unique();
            $table->date('f_nacimiento');
            $table->string('telefono');
            $table->decimal('cuota');

            $table->unsignedInteger('id_usuario');

            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
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
