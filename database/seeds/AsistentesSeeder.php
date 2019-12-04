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
            'apellido_paterno' => 'Alfaro',
            'apellido_materno' => 'Buendia',
          
            'correo' => 'JoseAlfaro@gmail.com',
            'telefono' => '4448883392',
            'clinica_id' => 1,
            'urlImagen' => '/storage/Asistentes/asistente.png',
            'user_id' => 3
        ]);

/*
        DB::table('asistentes')->insert([
            'primer_nombre' => 'Rosolina',
            'segundo nombre' => 'Mercedes',
            'apellido_paterno' => 'Buenavista',
            'apellido_materno' => 'Rueda',
            
            'correo' => 'Cambiar',
            'telefono' => 'Cambiar',
            'clinica_id' => 1
        ]);*/
    }
}
