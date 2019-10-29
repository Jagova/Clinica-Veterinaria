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
        	\DB::table('categorias')->insert(array(
           				'nombre' => $faker->randomElement(['Ropa para Gato','Ropa para Perro','Peluche para Gato','Alimento para aves', 'Alimento para Gato', 'Alimento para Perro','Juguete para  ']),
                  'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s') )
        );
        }
    }
}
