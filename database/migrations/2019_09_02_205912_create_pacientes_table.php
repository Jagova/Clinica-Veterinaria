<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table ->integer('edad');
            $table->string('especie');
            $table->string('raza');
            //No sé cómo se define la foto

            //Llave foránea al dueño de la mascota
            $table->unsignedInteger('duenio_id')->foreign('duenio_id')->references('id')->on('duenios')->onDelete('cascade'); 
            //Llave foránea a su doctor favorito
            $table->unsignedInteger('doctor_id')->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade'); 
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
        Schema::dropIfExists('pacientes');
    }
}
