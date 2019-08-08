<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HistorialMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial',function( Blueprint $tablaHistorial ) 
        {
            $tablaHistorial->increments('Id'); //Id 
            $tablaHistorial->integer('IdServ'); //id del servicio
            $tablaHistorial->integer('IdTrat');//id tratamiento
            $tablaHistorial->integer('IdMascota'); //id de la mascota
            $tablaHistorial->string('Nombre',100); 
            $tablaHistorial->date('Fecha');
            $tablaHistorial->integer('IdDoct'); //id Doctor
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial');
    }
}
