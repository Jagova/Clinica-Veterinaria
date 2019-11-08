<?php

use Illuminate\Database\Seeder;

class AsistentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('asistentes')->insert([
            'primer_nombre' => 'Jose',
            'segundo nombre' => 'Juan',
            'apellido_paterno' => 'Alfaro',
            'apellido_materno' => 'Buendia',
            'especialidad_1' => 'Cambiar',
            'especialidad_2' => 'Cambiar',
            'correo' => 'Cambiar',
            'telefono' => 'Cambiar',
            'clinica_id' => 1
        ]);


        DB::table('asistentes')->insert([
            'primer_nombre' => 'Rosolina',
            'segundo nombre' => 'Mercedes',
            'apellido_paterno' => 'Buenavista',
            'apellido_materno' => 'Rueda',
            'especialidad_1' => 'Cambiar',
            'especialidad_2' => 'Cambiar',
            'correo' => 'Cambiar',
            'telefono' => 'Cambiar',
            'clinica_id' => 1
        ]);
    }
}
