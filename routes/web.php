<?php

/**
 * Commit de prueba de Paco
 * 
 * Commit de prueba de Baca
 * 
 * Commit de tiffany
 * Commit de Jairo
 *Commit de Emmanuel 
 */


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    if( Auth::user() ) 
        if( Auth::user()->rol =='ADMINISTRADOR') 
            return redirect('/clinicas');
        else
            return redirect('/shop');
    else
       return redirect('/shop');
});

Route::post('logoutuser','UserController@logout');

/*Route::get('/', function () {
    return view('welcome');
});*/

//Clinicas
Route::resource('/clinicas','ClinicaController');
//Doctores
Route::resource('/doctores','DoctorController');
//Pacientes
Route::resource('/pacientes','PacienteController');
//Servicios
Route::resource('/servicios','ServicioController');
//Asistentes
Route::resource('/asistentes','AsistentesController');

//Articulo
Route::resource('/articulos','ArticulosController');

//Medicamentos
Route::resource('/medicamentos','MedicamentosController');
//Route::resource('/medicamentos','MedicsController');
//Duenos
Route::resource('/duenos','DuenoController');

//Rutas paras las categorias
Route::resource('/categorias','CategoriaController');

Route::resource('/subcategorias','SubcategoriasController');

//Rutas para la tienda
//Route::resource('/shop','Shop\ShopController');
Route::get('/shop', function () {
    return view('/shop/index');
});

Route::get('/shop/perros', function () {
    return view('/shop/perros/index');
});

Route::get('/control', function () {
    return view('/control/index');
});

Route::get('/control/buscar', function () {
    return view('/control/buscar/index');
});

Route::get('/control/buscar', function () {
    return view('/control/buscar/index');
});

/*regresa una vista de las mascotas*/
Route::get('mascotas',function(){ });


//Ejemplos de prueba (No perteneces al proyecto)
Route::get('/prueba2', function () {
    return view('prueba');
});

Route::resource('/prueba','EjemploController');

Route::resource('/pruebaDos','EjemploDosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
