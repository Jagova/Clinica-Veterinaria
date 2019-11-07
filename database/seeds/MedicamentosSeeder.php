<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MedicamentosSeeder extends Seeder
{

    public function run()
    { 
           
    	 DB::table('medicamentos')->insert([
            'nombre' => 'Desparasitante para lombrices para perros y gatos',
            'presentacion' => 'Capsula',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-12-24',
            'ml_mg' => '20',
            'precio' => '100',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/desparasitante.jpg',
            'paq_unidad' => '2',
            'controlado' => 'Si',
            'stock' => '200',
            'clinica_id' => 1
        ]);

             DB::table('medicamentos')->insert([
            'nombre' => 'Tratamiento para Sarna Perros y Gatos',
            'presentacion' => 'Aerosol',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-2-2',
            'ml_mg' => '200',
            'precio' => '100',
            'laboratorio' =>'BAYER',
            'urlImagen' => '/storage/Medicamentos/spraySarna.jpg',
            'paq_unidad' => '6',
            'controlado' => 'No',
            'stock' => '200',
            'clinica_id' => 1
        ]);


             DB::table('medicamentos')->insert([
            'nombre' => 'Vacuna para la rabia',
            'presentacion' => 'Inyectable',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-11-11',
            'ml_mg' => '200',
            'precio' => '100',
            'laboratorio' =>'FORT DODGE',
            'urlImagen' => '/storage/Medicamentos/vacunaRabia.png',
            'paq_unidad' => '6',
            'controlado' => 'No',
            'stock' => '200',
            'clinica_id' => 1
        ]);
    }
}

