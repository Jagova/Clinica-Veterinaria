<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuariosMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios',function( Blueprint $tablaUsuarios ) 
        {
            $tablaAdmin->increments('Id'); //Id 
            $tablaAdmin->string('Usr',100); 
            $tablaAdmin->string('Contraseña',20); 
            $tablaAdmin->integer('Tipo'); //El tipo de usuario que va ser la cuenta

        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
