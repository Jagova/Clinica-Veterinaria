<?php

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

/*Esta ruta regresa una vista de los dueños de las mascotas */
Route::get('duenos',function (){
    
}
);

/*regresa una vista de las mascotas*/
Route::get('mascotas',function()
{
}
);