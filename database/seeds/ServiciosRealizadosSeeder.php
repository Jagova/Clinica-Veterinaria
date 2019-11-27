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
        DB::table('servicios')->insert([

            'clinica_id' => 1,
            'user_id' => 1,
            'paciente_id' => 0,
            'servicio_id'=> 0,
            'fecha' =>  '2019-11-01'
           

        ]);   
        DB::table('servicios')->insert([

            'clinica_id' => 0,
            'user_id' => 1,
            'paciente_id' => 0,
            'servicio_id'=> 1,
            'fecha' =>  '2019-10-01'
           

        ]); 
        DB::table('servicios')->insert([

            'clinica_id' => 1
            'user_id' => 1,
            'paciente_id' => 0,
            'servicio_id'=> 2,
            'fecha' =>  '2019-01-01'
           

        ]); 
  
    DB::table('servicios')->insert([

        'clinica_id' => 1
        'user_id' => 1,
        'paciente_id' => 0,
        'servicio_id'=>3,
        'fecha' =>  '2018-11-01'
       

    ]);
} 
}
