<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Seeder encargado de 
     * @return void
     */
    public function run()
    {

      DB::table('categorias')->insert([ 'nombre' => 'Gatos']);
      DB::table('categorias')->insert([ 'nombre' => 'Perros']);
      DB::table('categorias')->insert([ 'nombre' => 'Aves']);
      DB::table('categorias')->insert([ 'nombre' => 'Reptiles']);
      DB::table('categorias')->insert([ 'nombre' => 'Peces']);
      DB::table('categorias')->insert([ 'nombre' => 'Pequeñas especies']);
      DB::table('categorias')->insert([ 'nombre' => 'Insectos']);


    }
}
