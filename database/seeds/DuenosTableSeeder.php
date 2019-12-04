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
            'direccion' => 'Privada de Los Andes #345, Lomas, SLP, SLP',
            'celular' => '4440294657',
            'rfc' => 'TICG880326876',
            'codigo_postal' => '78621',
            'razon_social' => 'Loki, Inc',
            'user_id' => 4
        ]);
        DB::table('duenos')->insert([
            'nombre' => 'Luis Carlos',
            'apellido_paterno' => 'Suarez',
            'apellido_materno' => 'Lopez',
            'telefono' => '474545545',
            'direccion' => 'Privada de Los Escondidos #145, Lomas, SLP, SLP',
            'celular' => '444334657',
            'rfc' => 'LCSL880326876',
            'codigo_postal' => '78621',
            'razon_social' => 'Loki, Inc',
            'user_id' => 5
        ]);
        DB::table('duenos')->insert([
            'nombre' => 'Jairo',
            'apellido_paterno' => 'Trujillo',
            'apellido_materno' => 'Méndez',
            'telefono' => '4281061454',
            'direccion' => 'Circuito Maestros Ilustres #467, Lomas 1era Sec, SLP, SLP',
            'celular' => '4281061454',
            'rfc' => 'TUMJ880326876',
            'codigo_postal' => '78120',
            'razon_social' => 'Dulceria, Inc',
            'user_id' => 6
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
