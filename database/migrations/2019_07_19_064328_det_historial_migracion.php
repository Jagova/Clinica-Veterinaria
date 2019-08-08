<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetHistorialMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_historial',function( Blueprint $tablaDetHistorial ) 
        {
            $tablaDetHistorial->increments('Id'); //Id 
            $tablaDetHistorial->integer('IdHistorial'); //id de Historial
            $tablaDetHistorial->string('Archivo',100);//
            $tablaDetHistorial->text('Nota'); 
        } );
    }

    /**
     * Reverse the migrations.
     * @return void */
    public function down()
    {
        Schema::dropIfExists('det_historial');
    }
}