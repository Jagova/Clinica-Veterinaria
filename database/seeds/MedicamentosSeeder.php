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
            'precio' => '300',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/med.png',
            'paq_unidad' => '2',
            'controlado' => 'Si',
            'stock' => '200',
            'clinica_id' => 1
        ]);

             DB::table('medicamentos')->insert([
            'nombre' => 'Tratamiento para pulgas',
            'presentacion' => 'Aerosol',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-2-2',
            'ml_mg' => '200',
            'precio' => '600',
            'laboratorio' =>'BAYER',
            'urlImagen' => '/storage/Medicamentos/solucion.png',
            'paq_unidad' => '6',
            'controlado' => 'No',
            'stock' => '200',
            'clinica_id' => 1
        ]);

 DB::table('medicamentos')->insert([
            'nombre' => 'Desparasitante general para mascotas',
            'presentacion' => 'Capsula',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-12-24',
            'ml_mg' => '20',
            'precio' => '600',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/med2.png',
            'paq_unidad' => '2',
            'controlado' => 'Si',
            'stock' => '200',
            'clinica_id' => 1
        ]);


 DB::table('medicamentos')->insert([
            'nombre' => 'Pastillas para tratamiento de Infección estomacal',
            'presentacion' => 'Capsula',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-12-24',
            'ml_mg' => '20',
            'precio' => '1000',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/med4.png',
            'paq_unidad' => '2',
            'controlado' => 'Si',
            'stock' => '200',
            'clinica_id' => 1
        ]);


 DB::table('medicamentos')->insert([
            'nombre' => 'Tratamiento eficaz para sarna',
            'presentacion' => 'Solución',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-12-24',
            'ml_mg' => '20',
            'precio' => '1200',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/med5.png',
            'paq_unidad' => '2',
            'controlado' => 'Si',
            'stock' => '200',
            'clinica_id' => 1
        ]);


 DB::table('medicamentos')->insert([
            'nombre' => 'Tratamiento infeccion estomacal',
            'presentacion' => 'Cápsula',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-12-24',
            'ml_mg' => '20',
            'precio' => '600',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/pastilas2.png',
            'paq_unidad' => '2',
            'controlado' => 'Si',
            'stock' => '200',
            'clinica_id' => 1
        ]);


 DB::table('medicamentos')->insert([
            'nombre' => 'Suero hidratante',
            'presentacion' => 'Solución',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-12-24',
            'ml_mg' => '20',
            'precio' => '600',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/solucion2.png',
            'paq_unidad' => '2',
            'controlado' => 'Si',
            'stock' => '200',
            'clinica_id' => 1
        ]);

DB::table('medicamentos')->insert([
            'nombre' => 'Suero hidratante',
            'presentacion' => 'Solución',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-12-24',
            'ml_mg' => '20',
            'precio' => '600',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/suero2.png',
            'paq_unidad' => '2',
            'controlado' => 'Si',
            'stock' => '200',
            'clinica_id' => 1
        ]);



DB::table('medicamentos')->insert([
            'nombre' => 'Suero hidratante',
            'presentacion' => 'Solución',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-12-24',
            'ml_mg' => '20',
            'precio' => '600',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/suero.png',
            'paq_unidad' => '2',
            'controlado' => 'Si',
            'stock' => '200',
            'clinica_id' => 1
        ]);

 DB::table('medicamentos')->insert([
            'nombre' => 'Pastilla Desparasitante',
            'presentacion' => 'Capsula',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-12-24',
            'ml_mg' => '20',
            'precio' => '600',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/pastillas.png',
            'paq_unidad' => '2',
            'controlado' => 'Si',
            'stock' => '200',
            'clinica_id' => 1
        ]);




 DB::table('medicamentos')->insert([
            'nombre' => 'Tratamiento eficaz para sarna',
            'presentacion' => 'Solución',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-12-24',
            'ml_mg' => '20',
            'precio' => '600',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/med5.png',
            'paq_unidad' => '2',
            'controlado' => 'Si',
            'stock' => '200',
            'clinica_id' => 1
        ]);


 DB::table('medicamentos')->insert([
            'nombre' => 'Tratamiento eficaz para sarna',
            'presentacion' => 'Solución',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-12-24',
            'ml_mg' => '20',
            'precio' => '600',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/med5.png',
            'paq_unidad' => '2',
            'controlado' => 'Si',
            'stock' => '200',
            'clinica_id' => 1
        ]);


 DB::table('medicamentos')->insert([
            'nombre' => 'Tratamiento rápido para sarna',
            'presentacion' => 'Capsula',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-12-24',
            'ml_mg' => '20',
            'precio' => '2000',
            'laboratorio' =>'CPMax',
            'urlImagen' => '/storage/Medicamentos/pastillas.png',
            'paq_unidad' => '2',
            'controlado' => 'Si',
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
            'urlImagen' => '/storage/Medicamentos/vacuna.png',
            'paq_unidad' => '6',
            'controlado' => 'No',
            'stock' => '200',
            'clinica_id' => 1
        ]);
             DB::table('medicamentos')->insert([
            'nombre' => 'Inyección para inicio del moquillo',
            'presentacion' => 'Inyectable',
            'compuesto' => 'Penicilina',
            'fecha_caducidad' => '2019-11-11',
            'ml_mg' => '200',
            'precio' => '100',
            'laboratorio' =>'FORT DODGE',
            'urlImagen' => '/storage/Medicamentos/vacuna3.png',
            'paq_unidad' => '6',
            'controlado' => 'No',
            'stock' => '200',
            'clinica_id' => 1
        ]);
    }
}

