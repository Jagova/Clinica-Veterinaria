<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Medicamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos',function( Blueprint $tablaMedicamentos ) 
        {
            $tablaMedicamentos->increments('Id');//clave primaria para el medicamento
            $tablaMedicamentos->string('Nombre',100 );// nombre del medicamento
            $tablaMedicamentos->string('Presentacion',100 );//tipo de presentacion para el medicamento
            $tablaMedicamentos->integer('ml_mg');//Si es en militros o miligramos
            $tablaMedicamentos->string('Compuesto',100 ); //Tipo de compuesto del medicamento 
            $tablaMedicamentos->float('Precio',8,2 ); //costo del medicamento
            $tablaMedicamentos->string('Laboratorio',100 ); //Labotoratorio en el que se producio
            $tablaMedicamentos->integer('Paq_unidad'); //Es por paquetes  o por unidades
            $tablaMedicamentos->integer('Controlado'); //Tipo de medicamento controlado bandera
            $tablaMedicamentos->string('Fecha_Caducidad',100 ); //fecha en el que caduca el medicamento
            $tablaMedicamentos->integer('Stock'); // cuantos existen en stock
            $tablaMedicamentos->integer('Vacuna'); //bandera
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamentos');
    }
}
