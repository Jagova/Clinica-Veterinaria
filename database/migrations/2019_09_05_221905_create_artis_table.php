<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/*Migracion para los articulos de la veterinaria */
class CreateArtisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artis', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('nombre');
            

            $table->string('preciocom');
            $table->string('marca');
           
            $table->unsignedInteger('stock');
            $table->string('fecha_cad');

            $table->string('precio_u');

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
        Schema::dropIfExists('artis');
    }
}
