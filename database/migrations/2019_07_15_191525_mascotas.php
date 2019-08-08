<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mascotas extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas',function( Blueprint $tablaMascotas ) 
        {
            $tablaMascotas->increments('Id');  //ID para cada mascota
            $tablaMascotas->integer('IdDueno'); //Clave Foranea del dueño
            $tablaMascotas->string('Nombre',100 );//Nombre de la mascota
            $tablaMascotas->string('Edad',100 ); //Edad de la mascota
            $tablaMascotas->string('Especie',10 );//Nombre de la especie de la mascota
            $tablaMascotas->string('Raza',100 ); //Raza de la mascota
            $tablaMascotas->string('Foto',100); //Foto de la mascota
            $tablaMascotas->integer('PrefDoc');  //Id del doctor
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
