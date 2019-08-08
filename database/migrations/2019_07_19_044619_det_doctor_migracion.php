<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetDoctorMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detDoctor',function( Blueprint $tablaDetDoctor ) 
        {
            $tablaDetDoctor->increments('Id'); //Id DetDoctor
            $tablaDetDoctor->integer('IdClinica');//Id Clinica
            $tablaDetDoctor->integer('Id');//Id

        } );
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detDoctor');
    }
}
