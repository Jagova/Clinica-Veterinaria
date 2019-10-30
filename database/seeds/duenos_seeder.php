<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class duenos_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('duenos')->insert([
                
            'nombre' =>"Emmanuel",
            'apellido_paterno' => "Escobar",
            'apellido_materno' =>"Chavez",
            'telefono'  =>"233445",
            'direccion' =>"Centro",
            'celular'=>"23244",
            'correo'=>"emma@gmail.com",
            'rfc'=>"223ASF",
            'codigo_postal'=>"223324",
            'razon_social' =>"GENERAL"
            ]);
        
    }
}
