<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ayudantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudantes',function( Blueprint $tablaAyundates ) 
        {
            $tablaAyudantes->increments('Id'); //clave primaria para ayudantes
            $tablaAyudantes->integer('IdUsr');// clave externa de usuario 
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayudantes');
    }
}
