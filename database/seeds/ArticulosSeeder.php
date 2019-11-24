<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticulosSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('articulos')->insert([
            'nombre' => 'Comida Perrito Feliz',
            'preciocom' => '100',
            'marca' => 'RoyalCanin',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/comidaParaPerro.png',
            'categoria_id' => 2,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);


                DB::table('articulos')->insert([
            'nombre' => 'Rascador para Gato',
            'preciocom' => '1000',
            'marca' => 'Katze',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/rascador.jpg',
            'categoria_id' => 1,
            'subcategoria_id' => 9,
            'clinica_id' => 1

        ]);

                DB::table('articulos')->insert([
            'nombre' => 'Pecera para 100 litros',
            'preciocom' => '3000',
            'marca' => 'RoyalCannin',
            'fecha_cad' => '2019-12-12',
            'precio_u' => '4000',
            'stock' => 122,
            'urlImagen' => '/storage/Articulos/pecera100lts.jpg',
            'categoria_id' => 5,
            'subcategoria_id' => 10,
            'clinica_id' => 1

        ]);        


              DB::table('articulos')->insert([
            'nombre' => 'Comedero panorámico para pájaros',
            'preciocom' => '400',
            'marca' => 'peek a boo',
            'fecha_cad' => '2019-10-10',
            'precio_u' => '600',
            'stock' => 200,
            'urlImagen' => '/storage/Articulos/comedero.jpg',
            'categoria_id' => 3,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);    



                      DB::table('articulos')->insert([
            'nombre' => 'Pecute Cama para Gato ',
            'preciocom' => '400',
            'marca' => 'peek a boo',
            'fecha_cad' => '2019-10-10',
            'precio_u' => '600',
            'stock' => 200,
            'urlImagen' => '/storage/Articulos/camaparagato.jpg',
            'categoria_id' => 1,
            'subcategoria_id' => 4,
            'clinica_id' => 1

        ]);    

 

    }
}

