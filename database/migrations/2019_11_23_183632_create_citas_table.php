<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('clinica_id')->foreign('clinica_id')->references('id')->on('clinicas')->onDelete('cascade');
            $table->unsignedInteger('paciente_id')->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->unsignedInteger('servicio_id')->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->string('estado');
            $table->string('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
