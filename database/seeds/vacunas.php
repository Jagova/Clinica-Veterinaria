<?php

use Illuminate\Database\Seeder;

class vacunas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vacunas')->insert([
            'nombre_vacuna' => 'Rabia',
            'fecha_Vacuna' => '2019-11-01',
            'fecha_Siguiente_Vacuna' => '2019-12-11',
            'paciente_id' => 1,
            'clinica_id'=>1,
            'user_id'=>2
        ]);  
        DB::table('vacunas')->insert([
            'nombre_vacuna' => 'Parvovirus',
            'fecha_Vacuna' => '2019-10-21',
            'fecha_Siguiente_Vacuna' => '2020-02-11',
            'paciente_id' => 1,
            'clinica_id'=>1,
            'user_id'=>2
        ]);  
        DB::table('vacunas')->insert([
            'nombre_vacuna' => 'Moquillo ',
            'fecha_Vacuna' => '2018-01-11',
            'fecha_Siguiente_Vacuna' => '2019-02-11',
            'paciente_id' => 2,
            'clinica_id'=>2,
            'user_id'=>2
        ]);  
        DB::table('vacunas')->insert([
            'nombre_vacuna' => 'Adenovirus ',
            'fecha_Vacuna' => '2019-11-11',
            'fecha_Siguiente_Vacuna' => '2019-12-11',
            'paciente_id' => 3,
            'clinica_id'=>1,
            'user_id'=>2
        ]);
        DB::table('vacunas')->insert([
            'nombre_vacuna' => 'Leptospirosis ',
            'fecha_Vacuna' => '2018-12-11',
            'fecha_Siguiente_Vacuna' => '2019-12-11',
            'paciente_id' => 1,
            'clinica_id'=>2,
            'user_id'=>2
        ]);

    }
}
