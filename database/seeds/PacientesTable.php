<?php

use Illuminate\Database\Seeder;

class PacientesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pacientes')->insert([
            'nombre' => str_random(10),
            'edad' => str_random(10),
            'especie' => str_random(10),
            'raza' => str_random(10),
            'duenio_id' => 1,
            'doctor_id' => 1,
            'urlImagen' => '/storage/Pacientes/pet.jpg',
        ]);
    }
}
