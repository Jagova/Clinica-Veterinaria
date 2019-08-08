<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetMascotaMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detMascota',function( Blueprint $tablaDetMascota ) 
        {
            $tablaDetMascota->increments('Id'); //Id DetMascota
            $tablaDetMascota->integer('IdMascota');//Id Mascota
            $tablaDetMascota->string('Status',100);//Estatus de la mascota
            $tablaDetMascota->string('Esterilizado',100);//Estirilizacion de la mascota
            $tablaDetMascota->string('Temperamento',100);//Temperamento de la mascota
            $tablaDetMascota->string('Aislar',5);//
        } );
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('defMascota');
        
    }
}
