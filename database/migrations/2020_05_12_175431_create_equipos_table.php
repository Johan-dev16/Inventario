<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->text('procesador');
            $table->text('memoria');
            $table->text('placa');
            $table->text('disco');
            $table->text('otros');
            $table->text('fuente');
            $table->text('pantalla');
            $table->text('teclado');
            $table->text('mouse');
            $table->text('sistema_operativo');
            $table->text('office');
            $table->text('otros_programas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
