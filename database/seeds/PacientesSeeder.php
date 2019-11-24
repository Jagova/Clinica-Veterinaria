<?php

use Illuminate\Database\Seeder;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('pacientes')->insert([
            'nombre' => 'Rio',
            'edad' => '1',
            'especie' => 'Ave',
            'raza' => 'Guacamaya Azul',
            'urlImagen' => '/storage/Pacientes/pet.jpg',
            'dueno_id' => 1,
            'doctor_id' => 1
        ]);  


             DB::table('pacientes')->insert([
            'nombre' => 'Hachiko',
            'edad' => '1',
            'especie' => 'Perro',
            'raza' => 'Inushiba',
            'urlImagen' => '/storage/Pacientes/pet.jpg',
            'dueno_id' => 1,
            'doctor_id' => 1
        ]);  


            DB::table('pacientes')->insert([
            'nombre' => 'Lassie',
            'edad' => '1',
            'especie' => 'Perro',
            'raza' => 'Collie Pelo Largo',
            'urlImagen' => '/storage/Pacientes/pet.jpg',
            'dueno_id' => 1,
            'doctor_id' => 1
        ]);  


                    DB::table('pacientes')->insert([
            'nombre' => 'Cleo',
            'edad' => '2',
            'especie' => 'Gato',
            'raza' => 'Collie Pelo Largo',
            'urlImagen' => '/storage/Pacientes/pet.png',
            'dueno_id' => 1,
            'doctor_id' => 1
        ]);      

                 DB::table('pacientes')->insert([
            'nombre' => 'Rango',
            'edad' => '2',
            'especie' => 'Reptil',
            'raza' => 'Camaleon',
            'urlImagen' => '/storage/Pacientes/pet.jpg',
            'dueno_id' => 1,
            'doctor_id' => 1
        ]);            

              DB::table('pacientes')->insert([
            'nombre' => 'Frank',
            'edad' => '2',
            'especie' => 'Perro',
            'raza' => 'Pug',
            'urlImagen' => '/storage/Pacientes/pet.jpg',
            'dueno_id' => 1,
            'doctor_id' => 1
        ]);
    }
}
