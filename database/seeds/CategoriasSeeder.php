<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
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
           				'nombre' => $faker->randomElement(['Ropa',
           					                                'Peluche',
           					                                'Juguete',
           					                                'Alimento',
           					                                '']),
                        'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s') )); }
    }
}
