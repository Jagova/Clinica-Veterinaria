<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MedicamentosSeeder extends Seeder
{

    public function run()
    {
         $faker = Faker::create();
        for ($i=0; $i < 10; $i++) {
        	\DB::table('medicamentos')->insert(array(
            'nombre' => $faker->randomElement(['Inyecccion','Desparasintante','Pastilla para moquillo','Vendaje']),
           'presentacion'  => $faker->randomElement(['3','4','3']),
           'compuesto'  => $faker->randomElement(['perro feliz','GUAGUA','PETS']),
           'ml_mg'  => $faker->randomElement(['10','50','100', '1','15','1000']),
           'precio'  => $faker->randomElement([20,10,50]),
           'laboratorio'  => $faker->randomElement(['umbrella','imss','neo-umbrella','viral']),
           'paq_unidad'  => $faker->randomElement(['10','11','5']),
           'controlado'  => $faker->randomElement(['No','Si']),
           'fecha_caducidad'  => $faker->randomElement(['2019-02-06','2019-08-08','2019-07-07']),
           'stock'  => $faker->randomElement(['9','6','100', '40','1','10']),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s') ));
        }
    }
}

