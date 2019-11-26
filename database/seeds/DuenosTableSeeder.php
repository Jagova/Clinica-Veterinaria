<?php

use Illuminate\Database\Seeder;

class DuenosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('duenos')->insert([
            'nombre' => 'tiffany',
            'apellido_paterno' => 'Cortez',
            'apellido_materno' => 'Gtz',
            'telefono' => '474545545',
            'direccion' => 'aqui',
            'celular' => '745896',
            'rfc' => 'unrfc',
            'codigo_postal' => '45621',
            'razon_social' => 'yo',
            'user_id' => 4
        ]);
        /*
        DB::table('duenos')->insert([
            'nombre' => 'otratiff',
            'apellido_paterno' => 'Cortez',
            'apellido_materno' => 'Gtz',
            'telefono' => '85236987',
            'direccion' => 'alla',
            'celular' => '78546',
            'rfc' => 'unrfc',
            'codigo_postal' => '45621',
            'razon_social' => 'yo',
        ]);
        DB::table('duenos')->insert([
            'nombre' => 'carlos',
            'apellido_paterno' => 'gtz',
            'apellido_materno' => 'Gtz',
            'telefono' => '789654123',
            'direccion' => 'lugar',
            'celular' => '123456789',
            'rfc' => 'unrfc',
            'codigo_postal' => '74589',
            'razon_social' => 'yo',
        ]);*/
    }
}
