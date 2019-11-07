<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call('ClinicasTableSeeder');
         $this->call('CategoriasSeeder');
         $this->call('SubCategoriaSeeder');
         $this->call('ArticulosSeeder');
         $this->call('MedicamentosSeeder');


         $this->call(
             [DuenosTableSeeder::class]
         );
    }
}

