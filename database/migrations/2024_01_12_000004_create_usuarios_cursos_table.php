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
        Schema::create('usuarios_cursos', function (Blueprint $table) {
            $table->id('usc_id');
            $table->foreignId('usu_id')->references('usu_id')->on('users');
            $table->foreignId('cur_id')->references('cur_id')->on('cursos');
            $table->string('usc_fecha_registro');
            $table->string('usc_fecha_finaliza');
            $table->string('usc_estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_cursos');
    }
};
