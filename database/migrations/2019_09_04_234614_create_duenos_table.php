<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duenos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('celular');
            $table->string('rfc');
            $table->string('codigo_postal');
            $table->string('razon_social');
            //Id usuario
            $table->unsignedInteger('user_id')->foreign('user_id')->references('id')->on('users')->onDelete('cascade');                   
            $table->timestamps();

        });
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
