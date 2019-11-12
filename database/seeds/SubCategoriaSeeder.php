<?php

use Illuminate\Database\Seeder;

class SubCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //SubCategorias para perros
      DB::table('subcategorias')->insert([ 'nombre' => 'Alimento para perro']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Alimento para gato']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Camas para perro']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Camas para gato']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Juguetes para perro']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Juguetes para gato']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Suplementos']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Acuarios']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Jaulas y Transportadoras']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Premios para gato']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Arena para gato']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Muebles para gato']);
    }
}
