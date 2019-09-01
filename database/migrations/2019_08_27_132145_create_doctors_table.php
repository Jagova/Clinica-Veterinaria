<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('especialidad_1');
            $table->string('especialidad_2');
            
            $table->unsignedInteger('clinica_id')->foreign('clinica_id')->references('id')->on('clinicas')->onDelete('cascade');
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
        Schema::dropIfExists('doctors');
    }
}