<?php

use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            'nombre' => 'Baño para perro',
            'precio' => 250.00,
            'clinica_id' => 1

        ]);    

        DB::table('servicios')->insert([
            'nombre' => 'Medicina preventiva',
            'precio' => 500.00,
            'clinica_id' => 1

        ]);    

        DB::table('servicios')->insert([
            'nombre' => 'Consulta',
            'precio' => 250.00,
            'clinica_id' => 1

        ]);    

        DB::table('servicios')->insert([
            'nombre' => 'Medicina Interna',
            'precio' => 250.00,
            'clinica_id' => 1

        ]);    


                DB::table('servicios')->insert([
            'nombre' => 'Rayos X',
            'precio' => 1000.00,
            'clinica_id' => 1

        ]);    


                DB::table('servicios')->insert([
            'nombre' => 'Laboratorio de análisis clínico',
            'precio' => 250.00,
            'clinica_id' => 1

        ]);    

        

    }
}
