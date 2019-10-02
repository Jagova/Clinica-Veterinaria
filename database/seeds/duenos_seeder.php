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
        $faker = Faker::create();
        for($i =0; i <10; i++)
        {
            DB::table('duenos')->insert([
                
            'Nombre' =>"Emmanuel",
            'Ap_M' => "Escobar",
            'Ap_P' =>"Chavez",
            'Tel'  =>"233445",
            'Dir' =>"Centro",
            'Cel'=>"23244",
            'Correo'=>"emma@gmail.com",
            'RFC'=>"223ASF",
            'CP'=>"223324",
            ]);
        }

        
    }
}
