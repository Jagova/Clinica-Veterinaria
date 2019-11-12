<?php

use Illuminate\Database\Seeder;

class DoctoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

            DB::table('doctors')->insert([
            'primer_nombre' => 'Doctor',
            'segundo_nombre' => 'Doctor',
            'apellido_paterno' => 'Doctor',
            'apellido_materno' => 'Doctor',
            'especialidad_1' => 'Cirugano',
            'especialidad_2' => 'Anestesiologo',
            'clinica_id' => 1,
            'user_id' => 2
        ]);   

         /*      DB::table('doctors')->insert([
            'primer_nombre' => 'Luis',
            'segundo nombre' => 'Angel',
            'apellido_paterno' => 'Carrisales',
            'apellido_materno' => 'Cerda',
            'especialidad_1' => 'Medico General',
            'especialidad_2' => 'Anestesiologo',
            'clinica_id' => 1
        ]);


            DB::table('doctors')->insert([
            'primer_nombre' => 'Carlos',
            'segundo nombre' => 'Manuel',
            'apellido_paterno' => 'Guiterrez',
            'apellido_materno' => 'Galan',
            'especialidad_1' => 'Cirugano',
            'especialidad_2' => 'Anestesiologo',
            'clinica_id' => 1
        ]);
       

             DB::table('doctors')->insert([
            'primer_nombre' => 'Oscar',
            'segundo nombre' => 'Daniel',
            'apellido_paterno' => 'Velarde',
            'apellido_materno' => 'De la Noche',
            'especialidad_1' => 'Cirugano',
            'especialidad_2' => 'Anestesiologo',
            'clinica_id' => 1
        ]);


            DB::table('doctors')->insert([
            'primer_nombre' => 'María',
            'segundo nombre' => 'Jose',
            'apellido_paterno' => 'Ferrero',
            'apellido_materno' => 'Moctezuma',
            'especialidad_1' => 'Rayos X',
            'especialidad_2' => 'Cardiología',
            'clinica_id' => 1
        ]);


                        DB::table('doctors')->insert([
            'primer_nombre' => 'Estefania',
            'segundo nombre' => 'Valeria',
            'apellido_paterno' => 'Fortuna',
            'apellido_materno' => 'Dominguez',
            'especialidad_1' => 'Traumatología',
            'especialidad_2' => 'Cuidados intensivos',
            'clinica_id' => 1
        ]);*/
    }
}
