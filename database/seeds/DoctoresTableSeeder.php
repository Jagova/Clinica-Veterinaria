<?php

use Illuminate\Database\Seeder;

class DoctoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'primer_nombre' => 'Mario',
            'apellido_paterno' => 'Ruiz',
            'apellido_materno' => 'Peralta',
            'especialidad_1' => 'Cirugano',
            'especialidad_2' => 'Anestesiologo',
            'clinica_id' => 1,
            'urlImagen' => '/storage/Doctores/doctor.png',
            'user_id' => 2
        ]);  
    }
}
