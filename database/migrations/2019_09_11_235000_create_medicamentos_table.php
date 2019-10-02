<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('presentacion');
            $table->string('ml_mg');
            $table->string('compuesto');
            $table->string('precio');
            $table->string('laboratorio');
            $table->string('paq_unidad');
            $table->string('controlado');
            $table->string('fecha_caducidad');
            $table->string('stock');
            
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
        Schema::dropIfExists('medicamentos');
    }
}
