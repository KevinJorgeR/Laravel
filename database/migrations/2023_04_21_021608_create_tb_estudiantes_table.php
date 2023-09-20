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
        Schema::create('tb_estudiantes', function (Blueprint $table) {
            $table->string('id', 5)->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('grado');
            $table->string('genero');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_estudiantes');
    }
};
