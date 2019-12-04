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
            'nombre' => 'Casa rascador (Juguetes gratis) ',
            'preciocom' => '100',
            'marca' => 'Happy Minino',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/1Gato/rascadorgato3.png',
            'categoria_id' => 1,
            'subcategoria_id' => 9,
            'clinica_id' => 1

        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Comida Enlatada',
            'preciocom' => '100',
            'marca' => 'RoyalMinino',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/1Gato/lata.png',
            'categoria_id' => 1,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);


                DB::table('articulos')->insert([
            'nombre' => 'Arenero ',
            'preciocom' => '1000',
            'marca' => 'Katze',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/arenero2.png',
            'categoria_id' => 1,
            'subcategoria_id' => 8,
            'clinica_id' => 1

        ]);


                DB::table('articulos')->insert([
            'nombre' => 'Transpotadora',
            'preciocom' => '1000',
            'marca' => 'Katze',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/transportadora2.png',
            'categoria_id' => 1,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);

     DB::table('articulos')->insert([
            'nombre' => 'Transpotadora desarmable',
            'preciocom' => '1000',
            'marca' => 'Katze',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/transportadora3.png',
            'categoria_id' => 1,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);

                DB::table('articulos')->insert([
            'nombre' => 'Rascador y casa ',
            'preciocom' => '1000',
            'marca' => 'Katze',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/rascadorparagato.png',
            'categoria_id' => 1,
            'subcategoria_id' => 9,
            'clinica_id' => 1

        ]);

                                DB::table('articulos')->insert([
            'nombre' => 'Paquete básico - Transportadora azul,1 Lata de Atún,Peluche, Cama',
            'preciocom' => '1000',
            'marca' => 'GatitoEducado',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/articulosparagato.png',
            'categoria_id' => 1,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);

                                            DB::table('articulos')->insert([
            'nombre' => 'Arenero con Pala',
            'preciocom' => '1000',
            'marca' => 'GatitoEducado',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/areneroparagato.png',
            'categoria_id' => 1,
            'subcategoria_id' => 8,
            'clinica_id' => 1

        ]);

                                             DB::table('articulos')->insert([
            'nombre' => 'Comida Enlatada Atún',
            'preciocom' => '100',
            'marca' => 'RoyalMinino',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/1Gato/atun.png',
            'categoria_id' => 1,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);

                                DB::table('articulos')->insert([
            'nombre' => 'Paquete básico - Transportadora azul,1 Lata de Atún,Peluche, Cama',
            'preciocom' => '1000',
            'marca' => 'GatitoEducado',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/articulosparagato.png',
            'categoria_id' => 1,
            'subcategoria_id' => 4,
            'clinica_id' => 1

        ]);

                                DB::table('articulos')->insert([
            'nombre' => 'Collarin para Gato',
            'preciocom' => '1000',
            'marca' => 'Gatito Feliz',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/collaringato.png',
            'categoria_id' => 1,
            'subcategoria_id' => 4,
            'clinica_id' => 1

        ]);

                     DB::table('articulos')->insert([
            'nombre' => 'Cuerda con cascabel Juguete para Gato bebé',
            'preciocom' => '1000',
            'marca' => 'Peque Gatito ',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/jugueteparagato.png',
            'categoria_id' => 1,
            'subcategoria_id' => 4,
            'clinica_id' => 1

        ]);


DB::table('articulos')->insert([
            'nombre' => 'Disfraz de Calavera Unitalla',
            'preciocom' => '1000',
            'marca' => 'Peque Gatito ',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/ropa1.png',
            'categoria_id' => 1,
            'subcategoria_id' => 7,
            'clinica_id' => 1

        ]);

DB::table('articulos')->insert([
            'nombre' => 'Disfraz de Bruja Unitalla',
            'preciocom' => '1000',
            'marca' => 'Peque Gatito ',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/ropa2.png',
            'categoria_id' => 1,
            'subcategoria_id' => 7,
            'clinica_id' => 1

        ]);


DB::table('articulos')->insert([
            'nombre' => 'Disfraz de Momia Unitalla',
            'preciocom' => '1000',
            'marca' => 'Peque Gatito ',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/ropa3.png',
            'categoria_id' => 1,
            'subcategoria_id' => 7,
            'clinica_id' => 1

        ]);



DB::table('articulos')->insert([
            'nombre' => 'Cuerda con cascabel Juguete para Gato bebé',
            'preciocom' => '1000',
            'marca' => 'Peque Gatito ',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/pelucheparagato.png',
            'categoria_id' => 1,
            'subcategoria_id' => 5,
            'clinica_id' => 1

        ]);

DB::table('articulos')->insert([
            'nombre' => 'Raton de peluche ',
            'preciocom' => '1000',
            'marca' => 'Peque Gatito ',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/pelucheparagato.png',
            'categoria_id' => 1,
            'subcategoria_id' => 5,
            'clinica_id' => 1

        ]);



DB::table('articulos')->insert([
            'nombre' => 'Premios de carne',
            'preciocom' => '1000',
            'marca' => 'Peque Gatito ',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/Premios.png',
            'categoria_id' => 1,
            'subcategoria_id' => 3,
            'clinica_id' => 1

        ]);


DB::table('articulos')->insert([
            'nombre' => 'Rascador y casa',
            'preciocom' => '1000',
            'marca' => 'Gatito Extremo',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/rascadorgato.png',
            'categoria_id' => 1,
            'subcategoria_id' => 9,
            'clinica_id' => 1

        ]);


DB::table('articulos')->insert([
            'nombre' => 'Transportadora ',
            'preciocom' => '1000',
            'marca' => 'Gatito Extremo',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/transportadora.png',
            'categoria_id' => 1,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);



                                DB::table('articulos')->insert([
            'nombre' => 'Paquete básico - Transportadora azul,1 Lata de Atún,Peluche, Cama',
            'preciocom' => '1000',
            'marca' => 'GatitoEducado',
            'fecha_cad' => '2019-10-20',
            'precio_u' => '1200',
            'stock' => 20,
            'urlImagen' => '/storage/Articulos/1Gato/articulosparagato.png',
            'categoria_id' => 1,
            'subcategoria_id' => 5,
            'clinica_id' => 1

        ]);                            


                             DB::table('articulos')->insert([
            'nombre' => 'Cama tipo almohada ',
            'preciocom' => '100',
            'marca' => 'Minino',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/1Gato/cama.png',
            'categoria_id' => 1,
            'subcategoria_id' => 4,
            'clinica_id' => 1

        ]);

                             DB::table('articulos')->insert([
            'nombre' => 'Bolsa de Arena de 8 Kgs',
            'preciocom' => '100',
            'marca' => 'RoyalMinino',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/1Gato/arena.png',
            'categoria_id' => 1,
            'subcategoria_id' => 4,
            'clinica_id' => 1

        ]);



                             DB::table('articulos')->insert([
            'nombre' => 'Bebedero para agua con tanque plastico de 5 litros ',
            'preciocom' => '100',
            'marca' => 'Healty Dog',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/bebedero.png',
            'categoria_id' => 2,
            'subcategoria_id' => 11,
            'clinica_id' => 1

        ]);
        

                      DB::table('articulos')->insert([
            'nombre' => 'Gorrito de Santa talla granda ',
            'preciocom' => '100',
            'marca' => 'Healty Dog',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/ropa1.png',
            'categoria_id' => 2,
            'subcategoria_id' => 7,
            'clinica_id' => 1

        ]);


                      DB::table('articulos')->insert([
            'nombre' => 'Gorrito de Santa talla chica ',
            'preciocom' => '100',
            'marca' => 'Healty Dog',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/ropa2.png',
            'categoria_id' => 2,
            'subcategoria_id' => 7,
            'clinica_id' => 1

        ]);
                                     DB::table('articulos')->insert([
            'nombre' => 'Casa de madera talla grande',
            'preciocom' => '100',
            'marca' => 'Happy Dog',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/casaparaperro.png',
            'categoria_id' => 2,
            'subcategoria_id' => 9,
            'clinica_id' => 1

        ]);

                                     DB::table('articulos')->insert([
            'nombre' => 'Casa de madera talla mediana',
            'preciocom' => '100',
            'marca' => 'Happy Dog',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/casitaparaperrtia2.png',
            'categoria_id' => 2,
            'subcategoria_id' => 9,
            'clinica_id' => 1

        ]);

                                     DB::table('articulos')->insert([
            'nombre' => 'Casa de madera talla chica',
            'preciocom' => '100',
            'marca' => 'Happy Dog',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/casitaparaperrtia.png',
            'categoria_id' => 2,
            'subcategoria_id' => 9,
            'clinica_id' => 1

        ]);


 DB::table('articulos')->insert([
            'nombre' => 'Cepillo especial paracuidado de cabello canino',
            'preciocom' => '100',
            'marca' => 'Happy Dog',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/cepilloparaperro.png',
            'categoria_id' => 2,
            'subcategoria_id' => 8,
            'clinica_id' => 1

        ]);                          

 DB::table('articulos')->insert([
            'nombre' => 'Collar para perros talla mediana hasta grande',
            'preciocom' => '100',
            'marca' => 'Amigo Canino',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/collar.png',
            'categoria_id' => 2,
            'subcategoria_id' => 11,
            'clinica_id' => 1

        ]);                                              
                                     
 DB::table('articulos')->insert([
            'nombre' => 'Comedero para perros',
            'preciocom' => '100',
            'marca' => 'Amigo Canino',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/comederoperro2.png',
            'categoria_id' => 2,
            'subcategoria_id' => 11,
            'clinica_id' => 1

        ]);                                              


 DB::table('articulos')->insert([
            'nombre' => 'Costal  de croquetas Mixto con regalos traste, sobre y lata de atún de regalo para gatito',
            'preciocom' => '100',
            'marca' => 'Amigo Canino',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/comidaparaperro.png',
            'categoria_id' => 2,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);                                              

        DB::table('articulos')->insert([
            'nombre' => 'Suplemento de Vitamina A. Muy importante para la vista, para el óptimo crecimiento de los cachorros, para la salud de la piel y el pelo',
            'preciocom' => '100',
            'marca' => 'Can can',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '200',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/comidaparaperro.png',
            'categoria_id' => 2,
            'subcategoria_id' => 2,
            'clinica_id' => 1

        ]); 
      
        
      
        DB::table('articulos')->insert([
            'nombre' => 'Cama para gato, tamaño chica',
            'preciocom' => '100',
            'marca' => 'SleepDog',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '200',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/camaparagato.jpg',
            'categoria_id' => 1,
            'subcategoria_id' => 3,
            'clinica_id' => 1

        ]);  

        DB::table('articulos')->insert([
            'nombre' => 'Cama para gato, tamaño grande',
            'preciocom' => '100',
            'marca' => 'SleepDog',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '200',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/camaparagato.jpg',
            'categoria_id' => 1,
            'subcategoria_id' => 3,
            'clinica_id' => 1

        ]);  
        DB::table('articulos')->insert([
            'nombre' => 'Cama para gato, tamaño doble',
            'preciocom' => '200',
            'marca' => 'SleepDog',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '200',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/camaparagato.jpg',
            'categoria_id' => 1,
            'subcategoria_id' => 3,
            'clinica_id' => 1

        ]); 

 DB::table('articulos')->insert([
            'nombre' => 'Paquete Juguetes( Pelota y hueso)',
            'preciocom' => '100',
            'marca' => 'Amigo Canino',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/juguetes.png',
            'categoria_id' => 2,
            'subcategoria_id' => 5,
            'clinica_id' => 1

        ]);                                              


 DB::table('articulos')->insert([
            'nombre' => 'Paquete de Limpieza(Shampoo, 2 cepillos, jabón)',
            'preciocom' => '100',
            'marca' => 'Perrito Sano',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/limpiezaparaperro.png',
            'categoria_id' => 2,
            'subcategoria_id' => 8,
            'clinica_id' => 1

        ]);                                              

  DB::table('articulos')->insert([
            'nombre' => 'Pelota estilo tenis',
            'preciocom' => '100',
            'marca' => 'Perrito Feliz',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/pelota.png',
            'categoria_id' => 2,
            'subcategoria_id' => 5,
            'clinica_id' => 1

        ]);                                              


    DB::table('articulos')->insert([
            'nombre' => 'Shampoo para perro ',
            'preciocom' => '100',
            'marca' => 'Perrito Feliz',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/Shampooparaperro.png',
            'categoria_id' => 2,
            'subcategoria_id' => 8,
            'clinica_id' => 1

        ]);                       

    DB::table('articulos')->insert([
            'nombre' => 'Tijera cortauñas',
            'preciocom' => '100',
            'marca' => 'Perrito Sano',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/tijerascortauna.png',
            'categoria_id' => 2,
            'subcategoria_id' => 8,
            'clinica_id' => 1

        ]);                  

             
DB::table('articulos')->insert([
            'nombre' => 'Transportadora para 1 perro talla chica',
            'preciocom' => '100',
            'marca' => 'Perrito Sano',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/transportadorparaperro.png',
            'categoria_id' => 2,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);   

DB::table('articulos')->insert([
            'nombre' => 'Traste para perro talla grande',
            'preciocom' => '100',
            'marca' => 'Perrito Sano',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/trasdecaomidaparaperro.png',
            'categoria_id' => 2,
            'subcategoria_id' => 8,
            'clinica_id' => 1

        ]);   


DB::table('articulos')->insert([
            'nombre' => 'Paquete de trastes par agua y alimento',
            'preciocom' => '100',
            'marca' => 'Perrito Sano',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/2Perro/trastes.png',
            'categoria_id' => 2,
            'subcategoria_id' => 8,
            'clinica_id' => 1

        ]);   


DB::table('articulos')->insert([
            'nombre' => 'Casa para Jardín',
            'preciocom' => '100',
            'marca' => 'Periquito Feliz',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/3Aves/casa.png',
            'categoria_id' => 3,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);   


DB::table('articulos')->insert([
            'nombre' => 'Galletas para Loro',
            'preciocom' => '100',
            'marca' => 'Periquito Feliz',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/3Aves/galletas.png',
            'categoria_id' => 3,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);   


DB::table('articulos')->insert([
            'nombre' => 'Semillas para cotorro australiano',
            'preciocom' => '100',
            'marca' => 'Periquito Feliz',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/3Aves/Comida3.png',
            'categoria_id' => 3,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);   

DB::table('articulos')->insert([
            'nombre' => 'Jaula grande para periquitos australianos',
            'preciocom' => '100',
            'marca' => 'Periquito Feliz',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/3Aves/jaula5.png',
            'categoria_id' => 3,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);   

DB::table('articulos')->insert([
            'nombre' => 'Semillas para aves pequeñas',
            'preciocom' => '100',
            'marca' => 'Periquito Feliz',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/3Aves/Comida.png',
            'categoria_id' => 3,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);   

DB::table('articulos')->insert([
            'nombre' => 'Semillas para cotorro australiano',
            'preciocom' => '100',
            'marca' => 'Periquito Feliz',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/3Aves/comida2.png',
            'categoria_id' => 3,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);   



DB::table('articulos')->insert([
            'nombre' => 'Jaula para Guacamaya',
            'preciocom' => '1000',
            'marca' => 'Periquito Feliz',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '1500',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/3Aves/jaula.png',
            'categoria_id' => 3,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);   



DB::table('articulos')->insert([
            'nombre' => 'Jaula para Loro',
            'preciocom' => '100',
            'marca' => 'Periquito Feliz',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/3Aves/jaula2.png',
            'categoria_id' => 3,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);   


DB::table('articulos')->insert([
            'nombre' => 'Pecera con rama para Camaleón',
            'preciocom' => '100',
            'marca' => 'Periquito Feliz',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/4Reptiles/pece4.png',
            'categoria_id' => 4,
            'subcategoria_id' => 10,
            'clinica_id' => 1

        ]);   


DB::table('articulos')->insert([
            'nombre' => 'Terrario para camaleón con plantas sintéticas',
            'preciocom' => '100',
            'marca' => 'Snake force',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '20',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/4Reptiles/pecera1.png',
            'categoria_id' => 4,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);   


DB::table('articulos')->insert([
            'nombre' => 'Terrario para  serpiente grande',
            'preciocom' => '1000',
            'marca' => 'Snake force',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '2000',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/4Reptiles/pecera3.png',
            'categoria_id' => 4,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);   



DB::table('articulos')->insert([
            'nombre' => 'Terrario para  serpiente grande con tronco de madera real',
            'preciocom' => '2000',
            'marca' => 'Snake force',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '3000',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/4Reptiles/pecera2.png',
            'categoria_id' => 4,
            'subcategoria_id' => 6,
            'clinica_id' => 1

        ]);   



DB::table('articulos')->insert([
            'nombre' => 'Pecera para ranas con piedras y accesorios incluidos',
            'preciocom' => '2000',
            'marca' => 'Snake force',
            'fecha_cad' => '2019-12-24',
            'precio_u' => '3000',
            'stock' => 100,
            'urlImagen' => '/storage/Articulos/4Reptiles/pecera4.png',
            'categoria_id' => 4,
            'subcategoria_id' => 10,
            'clinica_id' => 1

        ]);   


                DB::table('articulos')->insert([
            'nombre' => 'Pecera para 100 litros',
            'preciocom' => '3000',
            'marca' => 'Acapulco ',
            'fecha_cad' => '2019-12-12',
            'precio_u' => '4000',
            'stock' => 122,
            'urlImagen' => '/storage/Articulos/5Peces/Acuario2.png',
            'categoria_id' => 5,
            'subcategoria_id' => 10,
            'clinica_id' => 1

        ]);        


                DB::table('articulos')->insert([
            'nombre' => 'Pecera para 50 litros con accesorios',
            'preciocom' => '3000',
            'marca' => 'Acapulco',
            'fecha_cad' => '2019-12-12',
            'precio_u' => '4000',
            'stock' => 122,
            'urlImagen' => '/storage/Articulos/5Peces/acuario3.png',
            'categoria_id' => 5,
            'subcategoria_id' => 10,
            'clinica_id' => 1

        ]);        

                DB::table('articulos')->insert([
            'nombre' => 'Pecera básica ',
            'preciocom' => '500',
            'marca' => 'Acapulco',
            'fecha_cad' => '2019-12-12',
            'precio_u' => '600',
            'stock' => 122,
            'urlImagen' => '/storage/Articulos/5Peces/Acuario.png',
            'categoria_id' => 5,
            'subcategoria_id' => 10,
            'clinica_id' => 1

        ]);        



                DB::table('articulos')->insert([
            'nombre' => 'Castillo para adornar acuario ',
            'preciocom' => '500',
            'marca' => 'Happy Fish',
            'fecha_cad' => '2019-12-12',
            'precio_u' => '600',
            'stock' => 122,
            'urlImagen' => '/storage/Articulos/5Peces/castilloparapecera.png',
            'categoria_id' => 5,
            'subcategoria_id' => 11,
            'clinica_id' => 1

        ]);        

                                DB::table('articulos')->insert([
            'nombre' => 'Alimento nutritivo para peces agua dulce',
            'preciocom' => '500',
            'marca' => 'Happy Fish',
            'fecha_cad' => '2019-12-12',
            'precio_u' => '600',
            'stock' => 122,
            'urlImagen' => '/storage/Articulos/5Peces/comidapeces.png',
            'categoria_id' => 5,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);        


                DB::table('articulos')->insert([
            'nombre' => 'Pecera básica para pez japones con grava y plantas sintéticas',
            'preciocom' => '500',
            'marca' => 'Acapulco',
            'fecha_cad' => '2019-12-12',
            'precio_u' => '600',
            'stock' => 122,
            'urlImagen' => '/storage/Articulos/5Peces/peceaccesosrios.png',
            'categoria_id' => 5,
            'subcategoria_id' => 1,
            'clinica_id' => 1

        ]);        



                DB::table('articulos')->insert([
            'nombre' => 'Pecera básica para peces grandes con lampara especial',
            'preciocom' => '500',
            'marca' => 'Acapulco',
            'fecha_cad' => '2019-12-12',
            'precio_u' => '600',
            'stock' => 122,
            'urlImagen' => '/storage/Articulos/5Peces/peceraluz.png',
            'categoria_id' => 5,
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
            'subcategoria_id' => 10,
            'clinica_id' => 1

        ]);        

                DB::table('articulos')->insert([
            'nombre' => 'Pecera básica para peces japones con grava y plantas sintéticas con base',
            'preciocom' => '500',
            'marca' => 'Acapulco',
            'fecha_cad' => '2019-12-12',
            'precio_u' => '600',
            'stock' => 122,
            'urlImagen' => '/storage/Articulos/5Peces/peceraaccesorios.png',
            'categoria_id' => 5,
            'subcategoria_id' => 10,
            'clinica_id' => 1

        ]);        


                DB::table('articulos')->insert([
            'nombre' => 'Pecera básica para pez dorado japones',
            'preciocom' => '500',
            'marca' => 'Acapulco',
            'fecha_cad' => '2019-12-12',
            'precio_u' => '600',
            'stock' => 122,
            'urlImagen' => '/storage/Articulos/5Peces/pecerabasica.png',
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

