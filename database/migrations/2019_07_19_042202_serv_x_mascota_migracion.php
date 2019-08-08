<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServXMascotaMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ServXMascota',function( Blueprint $tablaServXMascota ) 
        {
            $tablaServXMascota->increments('Id'); //Id para servicio para mascota
            $tablaServXMascota->integer('IdServ');//Id Servicio
            $tablaServXMascota->integer('IdMascota');//Id Mascota
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ServXMascota');
    }
}
