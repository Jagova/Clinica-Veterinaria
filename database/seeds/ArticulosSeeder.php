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
            'marca' => 'RoyalCannin',
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
            'subcategoria_id' => 1,
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
            'subcategoria_id' => 8,
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
            'categoria_id' => 5,
            'subcategoria_id' => 8,
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
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);    


                    DB::table('articulos')->insert([
            'nombre' => 'Pro Plan Optiderma Sensitive Skin Alimento Seco para Perro Adulto  ',
            'preciocom' => '1672',
            'marca' => 'purina',
            'fecha_cad' => '2019-10-10',
            'precio_u' => '1760',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/problan.png',
            'categoria_id' => 1,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);    


                    DB::table('articulos')->insert([
            'nombre' => 'Hills Prescription Diet Alimento Para Gato S/D 1.81 kg',
            'preciocom' => '446',
            'marca' => 'purina',
            'fecha_cad' => '2019-10-10',
            'precio_u' => '470',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/urinarycare.png',
            'categoria_id' => 1,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);    

                    


               DB::table('articulos')->insert([
            'nombre' => 'Chuckit! Pelota Ultra X Grande',
            'preciocom' => '205',
            'marca' => 'purina',
            'fecha_cad' => '2019-10-10',
            'precio_u' => '205',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/pelota.png',
            'categoria_id' => 1,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);  

                    

 

    }
}

