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
         $this->call('UsersTableSeeder');
         $this->call('ClinicasTableSeeder');
         $this->call('DoctoresTableSeeder');
         $this->call('CategoriasSeeder');
         $this->call('SubCategoriaSeeder');
         $this->call('ArticulosSeeder');
         $this->call('MedicamentosSeeder');
         $this->call('PacientesSeeder');
         $this->call('AsistentesSeeder');
         $this->call('ServiciosSeeder');
         

         /*$this->call(
             [DuenosTableSeeder::class]
         );*/

        /* DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'administrador@gmail.com',
            'rol' => 'ADMINISTRADOR',
            'password' => Hash::make('12345678')
        ]);*/
/*
         //$this->call(UsersTableSeeder::class);
         $this->call(ClinicasTableSeeder::class);
         $this->call(ArticulosSeeder::class);
         //$this->call(DoctoresTableSeeder::class);
         //$this->call(PacientesTable::class);
         $this->call(duenos_seeder::class);
         $this->call(MedicamentosSeeder::class);*/
    }
}

