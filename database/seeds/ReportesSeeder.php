<?php

use Illuminate\Database\Seeder;

class ReportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	 DB::table('reportes')->insert([
            'titulo' => 'Gato desaparecido ',
            'descripcion' => 'Se le vio por última ves por la calle 4 en la colonia industrial aviación',
            'estado' => 'Abierto',
            'urlImagen' => '/storage/Reportes/gatito.png',
            'fecha' => '2019-12-24'
        ]);


    	     	 DB::table('reportes')->insert([
            'titulo' => 'Gato desaparecido ',
            'descripcion' => 'Mi gatito se salio cuando estaba limpiando mi casa reponder al nombre de Pelu',
            'estado' => 'Abierto',
            'urlImagen' => '/storage/Reportes/gato2.png',
            'fecha' => '2019-11-20'
        ]);

    	     	     	 DB::table('reportes')->insert([
            'titulo' => 'Hurón perdido ',
            'descripcion' => 'Hurón llamado Copernico se salio cuando limpiaba la cochera en la colonia satelite',
            'estado' => 'Abierto',
            'urlImagen' => '/storage/Reportes/huron.png',
            'fecha' => '2019-11-21'
        ]);


    	     	     	     	 DB::table('reportes')->insert([
            'titulo' => 'Perro desaparecido ',
            'descripcion' => 'Ayuda a Fido a volver a casa se escapo de casa cuando sacaba la basura',
            'estado' => 'Abierto',
            'urlImagen' => '/storage/Reportes/perrito.png',
            'fecha' => '2019-11-22'
        ]);


    	     	     	     	 DB::table('reportes')->insert([
            'titulo' => 'Perritos desaparecidos',
            'descripcion' => 'Par de perritos desaparecidos se asustaron cuando sonaba una ambulancia',
            'estado' => 'Abierto',
            'urlImagen' => '/storage/Reportes/perrito3.png',
            'fecha' => '2019-11-22'
        ]);


    	     	     	     	 DB::table('reportes')->insert([
            'titulo' => 'Perrito desaparecido',
            'descripcion' => 'Perro perdido en los alrededores del estadio',
            'estado' => 'Abierto',
            'urlImagen' => '/storage/Reportes/perrito4.png',
            'fecha' => '2019-11-23'
        ]);
    	 

    	     	     	     	     	 DB::table('reportes')->insert([
            'titulo' => 'Perrito Boxer desaparecido',
            'descripcion' => 'Perrito perdido por rumbos de la fenapo',
            'estado' => 'Abierto',
            'urlImagen' => '/storage/Reportes/perrito5.png',
            'fecha' => '2019-11-24'
        ]);


    	     	     	     	     	 DB::table('reportes')->insert([
            'titulo' => 'Perrito extraviado ',
            'descripcion' => 'Por parque de Morales se escapo persiguiendo una ardilla',
            'estado' => 'Abierto',
            'urlImagen' => '/storage/Reportes/perrito2.png',
            'fecha' => '2019-11-25'
        ]);

    }
}
