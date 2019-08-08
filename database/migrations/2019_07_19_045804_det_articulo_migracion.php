<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetArticuloMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detArticulo',function( Blueprint $tablaDetArticulo ) 
        {
            $tablaDetArticulo->increments('Id'); //Id DetArticulo
            $tablaDetArticulo->integer('IdArticulo');//Id Articulo
            $tablaDetArticulo->integer('IdMascota'); //IdMascota
            $tablaDetArticulo->date('Fecha'); //fechadet_articurlo
            $tablaDetArticulo->integer('IdVenta'); //id venta
            $tablaDetArticulo->string('Talla',10); //Talla detArticulo
        } );
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detArticulo');
    }
}
