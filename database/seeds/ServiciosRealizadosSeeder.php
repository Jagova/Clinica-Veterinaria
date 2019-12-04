<?php

use Illuminate\Database\Seeder;

class ServiciosRealizadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicio_realizados')->insert([

            'clinica_id' => 1,
            'user_id' => 2,
            'paciente_id' => 1,
            'servicio_id'=> 1,
            'fecha' =>  '2019-11-01'
           

        ]);   
        DB::table('servicio_realizados')->insert([

            'clinica_id' => 1,
            'user_id' => 2,
            'paciente_id' => 1,
            'servicio_id'=> 1,
            'fecha' =>  '2019-10-01'
           

        ]); 
        DB::table('servicio_realizados')->insert([

            'clinica_id' => 1,
            'user_id' => 2,
            'paciente_id' => 1,
            'servicio_id'=> 2,
            'fecha' =>  '2019-01-01'
           

        ]); 
  
    DB::table('servicio_realizados')->insert([

        'clinica_id' => 1,
        'user_id' => 2,
        'paciente_id' => 1,
        'servicio_id'=>3,
        'fecha' =>  '2018-11-01'
        
    ]);
} 
}
