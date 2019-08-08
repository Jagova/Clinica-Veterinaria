<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetEnfMascotaMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detEnfMascota',function( Blueprint $tablaDetEnfMascota ) 
        {
            $tablaDetEnfMascota->increments('Id'); //Id Det Enfermedad mascota
            $tablaDetEnfMascota->integer('IdServ');//Id Mascota
            $tablaDetEnfMascota->string('Padecimiento',100);//Padecimiento
        } );
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detEnfMascota');
    }
}