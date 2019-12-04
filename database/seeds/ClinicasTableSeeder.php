<?php

use Illuminate\Database\Seeder;

class ClinicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clinicas')->insert([
            'nombre' => 'Clínica 1',
            'direccion' => 'San Miguelito'
        ]);
        DB::table('clinicas')->insert([
            'nombre' => 'Clínico 2',
            'direccion' => 'San Miguelito 2'
        ]);
    }
}
