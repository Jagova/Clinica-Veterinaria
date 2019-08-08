<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Doctores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctores',function( Blueprint $tablaDoctores ) 
        {
            $tablaDoctores->increments('Id');  //ID para lo doctor
            $tablaDoctores->string('Nombre',100 ); //Nombre del doctor
            $tablaDoctores->string('Ap_P',100 );//Apellido Paterno
            $tablaDoctores->string('Ap_M',100 ); //Apellido Materno
            $tablaDoctores->string('Cedula',100 );//Cedula Profesional del Doctor
            $tablaDoctores->string('Tel',100 ); //Telefono del doctor
            $tablaDoctores->string('Correo',100 ); //Email del doctor
            $tablaDoctores->string('Cel',100 ); //Celular del doctor
            $tablaDoctores->string('Dir',100 ); //Direccion del doctor
            $tablaDoctores->string('Esp1',100 ); //1er Especialidad  del doctor
            $tablaDoctores->string('Esp2',100 ); //2da Especialidad del doctor
            $tablaDoctores->string('Urgencia',100 ); //Urgencia 
            $tablaDoctores->integer('IdUs1'); //Clave externa - Id usurio 
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctores');
    }
}
