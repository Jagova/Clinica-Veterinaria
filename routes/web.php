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

Route::get('/shop/perros','UserController@shopPerros');
Route::get('/shop/gatos','UserController@shopGatos');
Route::get('/shop/mamiferos','UserController@shopMamiferos');
Route::get('/shop/aves','UserController@shopAves');
Route::get('/shop/reptiles','UserController@shopReptiles');
Route::get('/shop/peces','UserController@shopPeces');
Route::get('/shop/servicios','UserController@shopServicios');

/*
Route::get('/shop/perros', function () {
    return view('/shop/perros/index');
});*/

Route::get('/control', function () {
    return view('/control/index');
});

Route::get('/control/buscar', function () {
    return view('/control/buscar/index');
});

Route::get('/control/buscar/dueno', function () {
    return view('/control/buscar/dueno/index');
});
Route::get('/control/buscar/mascota', function () {
    return view('/control/buscar/mascota/index');
});

Route::get('/control/registro_dueno', function () {
    return view('/control/registro_dueno/index');
});

Route::get('/control/registro_mascota', function () {
    return view('/control/registro_mascota/index');
});

Route::get('/control/agendar', function () {
    return view('/control/agendar/index');
});

Route::get('/control/registro_vacunas', function () {
    return view('/control/registro_vacunas/index');
});

Route::get('/control/registro_ventas', function () {
    return view('/control/registro_ventas/index');
});

Route::get('/control/registro_compras', function () {
    return view('/control/registro_compras/index');
});

Route::get('/control/historial_mascota', function () {
    return view('/control/historial_mascota/index');
});

Route::get('/control/historial_personal', function () {
    return view('/control/historial_personal/index');
});

Route::get('/control/buscar/mascota/encontrado', function () {
    return view('/control/buscar/mascota/encontrado/index');
});

Route::get('/control/buscar/mascota/resultados', function () {
    return view('/control/buscar/mascota/resultados/index');
});

Route::get('/control/buscar/dueno/encontrado', function () {
    return view('/control/buscar/dueno/encontrado/index');
});

Route::get('/control/buscar/dueno/resultados', function () {
    return view('/control/buscar/dueno/resultados/index');
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


//Rutas para editar contraseñas
Route::post('/doctoreseditapass/{id}','DoctorController@updatePassword');