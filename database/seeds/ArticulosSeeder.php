<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticulosSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) {
        	\DB::table('articulos')->insert(array(
           				'nombre' => $faker->randomElement(['Pelota','Collar','Peluche','Shampoo']),
           				'preciocom'  => $faker->randomElement(['3','4','3']),
           'marca'  => $faker->randomElement(['perro feliz','GUAGUA','PETS']),
           'stock'  => $faker->randomElement([20,10,50]),
           'fecha_cad'  => $faker->randomElement(['2019-02-06','2019-08-08','2019-07-07']),
           'precio_u'  => $faker->randomElement(['20.00','40.00','60.00']),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s') ));
        }
    }
}
