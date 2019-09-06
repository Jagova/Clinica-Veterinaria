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
    return view('welcome');
});

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
Route::resource('/artis','ArtisController');

//Medicamentos
Route::resource('/medicamentos','MedicsController');
//Duenos
Route::resource('/duenos','DuenoController');



/*regresa una vista de las mascotas*/
Route::get('mascotas',function(){ });


//Ejemplos de prueba (No perteneces al proyecto)
Route::get('/prueba2', function () {
    return view('prueba');
});

Route::resource('/prueba','EjemploController');

Route::resource('/pruebaDos','EjemploDosController');