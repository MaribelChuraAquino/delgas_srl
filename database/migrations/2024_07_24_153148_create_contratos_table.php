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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->foreignId('user_id')->constrained('users');
            $table->string('nombre_contrato');
            $table->date('fecha');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('tipo_producto');
            $table->string('documento')->nullable();
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
