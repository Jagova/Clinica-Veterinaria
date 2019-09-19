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
         //$this->call(duenos_seeder::class);//
         $this->call('ArticulosSeeder');
         $this->call('MedicamentosSeeder');

    }
}

