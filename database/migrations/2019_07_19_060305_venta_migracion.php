<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VentaMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta',function( Blueprint $tablaVentas ) 
        {
            $tablaVentas->increments('Id'); //Id de ventas
            $tablaVentas->date('Fecha');//Fecha de ventas
            $tablaVentas->integer('IdAyudante');//Id del Ayudante
            $tablaVentas->float('Total',8,2);//total de venta
            $tablaVentas->integer('IdDueno',100);//Id del dueno
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
