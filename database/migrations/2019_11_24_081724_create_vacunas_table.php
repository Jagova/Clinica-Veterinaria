<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacunas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre_vacuna');
            $table->date('Fecha_Vacuna');
            $table->unsignedInteger('paciente_id')->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->date('Fecha_Siguiente_Vacuna');
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
        Schema::dropIfExists('vacunas');
    }
}
