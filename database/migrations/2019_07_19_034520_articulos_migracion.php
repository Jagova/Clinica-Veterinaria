<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticulosMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos',function( Blueprint $tablaArticulos ) 
        {
            $tablaArticulos->increments('Id');//clave primaria para Articulo
            $tablaArticulos->string('Nombre',100 );// nombre del Artículo
            $tablaArticulos->integer('IdCategoria');//ID para la categoria del articulo
            $tablaArticulos->string('PrecioCompra',100 );//Precio-Compra del artículo
            $tablaArticulos->string('Marca',100 ); //Marca del articulo
            $tablaArticulos->integer('Stock'); // cuantos existen en stock
            $tablaArticulos->string('Fecha_Caducidad',100 ); //fecha en el que caduca el articulo
            $tablaArticulos->float('PrecioUt',8,2 ); //Precio Articulo
            $tablaArticulos->integer('IdSubcategoria' ); //IdSubcategoria
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
