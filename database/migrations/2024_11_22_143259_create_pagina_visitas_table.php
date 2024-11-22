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
        Schema::create('pagina_visitas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_pagina')->unique();  // Nombre o ruta de la página
            $table->integer('visitas')->default(0);  // Contador de visitas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagina_visitas');
    }
};
