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
      //SubCategorias
      DB::table('subcategorias')->insert([ 'nombre' => 'Alimento']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Suplementos']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Premios']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Camas']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Juguetes']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Transportadoras']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Ropa']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Higiene']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Muebles']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Acuarios']);
      DB::table('subcategorias')->insert([ 'nombre' => 'Accesorios']);
    }
}
