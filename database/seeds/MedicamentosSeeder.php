<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MedicamentosSeeder extends Seeder
{




    /**
     * Run the database seeds.
     *
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
           
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
        for ($i=0; $i < 10; $i++) {
        	\DB::table('medicamentos')->insert(array(
            'nombre' => $faker->randomElement(['Pelota','Collar','Peluche','Shampoo']),
           'presentacion'  => $faker->randomElement(['3','4','3']),
           'compuesto'  => $faker->randomElement(['perro feliz','GUAGUA','PETS']),
           'ml_mg'  => $faker->randomElement(['10 ml','50 mg','100 ml', '1 ml','15 ml','1000 ml']),
           'precio'  => $faker->randomElement([20,10,50]),
           'laboratorio'  => $faker->randomElement(['20.00','40.00','60.00']),
           'laboratorio'  => $faker->randomElement(['20.00','40.00','60.00']),
           'paq_unidad'  => $faker->randomElement(['No','Si']),
           'controlado'  => $faker->randomElement(['12 de Enero del 2019','12 de Noviembre del 2019','12 de Septiembre del 2019',' 12 de Abril del 2019']),
           'fecha_caducidad'  => $faker->randomElement(['01/Marzo/2025','12/Feb/2025','14/Mayo/2030','07/Abril/2030']),
           'stock'  => $faker->randomElement(['9','6','100', '40','1','10']),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s') ));
        }
    }
}

