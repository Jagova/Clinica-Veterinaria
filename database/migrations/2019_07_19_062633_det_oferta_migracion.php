<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetOfertaMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detOferta',function( Blueprint $tabladetOferta ) 
        {
            $tabladetOferta->increments('Id'); //Id 
            $tabladetOferta->integer('IdServ');
            $tabladetOferta->integer('IdArticulo');
            $tabladetOferta->integer('IdCat');
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detOferta');
        //
    }
}
