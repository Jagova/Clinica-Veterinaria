<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OfertaMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta',function( Blueprint $tablaOfertas ) 
        {
            $tablaOfertas->increments('Id'); //Id det ventas
            $tablaOfertas->string("Nombre",100); 
            $tablaOfertas->float('Costo',8,2);
            $tablaOfertas->date('F_Inicio'); //fecha de inicio
            $tablaOfertas->date('F_final'); //fecha de final
            $tablaOfertas->integer('Porcentaje');
            $tablaOfertas->integer('Cantidad');
            $tablaOfertas->integer('Activo');
            $tablaOfertas->integer('Min_Pza'); //minimo de pieza
            $tablaOfertas->integer('Min_Compra'); //minimo de pieza
            $tablaOfertas->integer('Min_Pza'); //minimo de pieza
            $tablaOfertas->integer('Max_Compra'); //Max de pieza
            $tablaOfertas->integer('Max_Pza'); //Max de pieza
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oferta');
    }
}
