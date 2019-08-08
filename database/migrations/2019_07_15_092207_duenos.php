<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Duenos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duenos',function(blueprint $tablaDuenos ) 
        {
            $tablaDuenos->increments('Id'); //genera un campo de auto increment
            $tablaDueno->string('Nombre',100 ); // nombre del cliente
            $tablaDueno->string('Ap_P',100 ); // apellido parterno del cliente
            $tablaDueno->string('Ap_M',100 ); //apellido materno  del cliente
            $tablaDueno->string('Tel',100 ); //telefono del cliente
            $tablaDueno->string('Dir',100 ); //direccion del cliente
            $tablaDueno->string('Cel',10 ); //celular del cliente
            $tablaDueno->string('Correo',100 ); //corrreo electronico del cliente
            $tablaDueno->string('RFC',100 );// rfc del cliente
            $tablaDueno->integer('CP'); // codigo postal del cliente
            $tablaDueno->string('RazonSocial',100); // Razon social del cliente
            $tablaDueno->integer('IdUsr'); //Id usuario para el cliente
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duenos');
    }
}
