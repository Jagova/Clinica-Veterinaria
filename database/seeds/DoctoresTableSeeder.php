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
        //
        DB::table('doctors')->insert([
            'primer_nombre' => str_random(10),
            'segundo_nombre' => str_random(10),
            'apellido_paterno' => str_random(10),
            'apellido_materno' => str_random(10),
            'especialidad_1' => str_random(10),
            'especialidad_2' => str_random(10),
            'urlImagen' => '/storage/Doctores/doctor.jpg',
        ]);
    }
}
