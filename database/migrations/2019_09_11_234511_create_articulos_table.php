<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombre')->required();
            

            $table->string('preciocom')->required();;
            $table->string('marca')->required();;
           
            $table->unsignedInteger('stock')->required();;
            $table->string('fecha_cad')->required();;

            $table->string('precio_u')->required();;

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
        Schema::dropIfExists('articulos');
    }
}