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
Route::get('/shop/perros/alimento','UserController@shopPerrosAlimento');
Route::get('/shop/perros/suplementos','UserController@shopPerrosSuplementos');
Route::get('/shop/perros/camas','UserController@shopPerrosCamas');
Route::get('/shop/perros/juguetes','UserController@shopPerrosJuguetes');
Route::get('/shop/perros/transportadoras','UserController@shopPerrosTransportadoras');
Route::get('/shop/perros/ropa','UserController@shopPerrosRopa');
Route::get('/shop/perros/higiene','UserController@shopPerrosHigiene');

Route::get('/shop/gatos','UserController@shopGatos');
Route::get('/shop/gatos/alimento','UserController@shopGatosAlimento');
Route::get('/shop/gatos/premios','UserController@shopGatosPremios');
Route::get('/shop/gatos/suplementos','UserController@shopGatosSuplementos');
Route::get('/shop/gatos/camas','UserController@shopGatosCamas');
Route::get('/shop/gatos/juguetes','UserController@shopGatosJuguetes');
Route::get('/shop/gatos/transportadoras','UserController@shopGatosTransportadoras');
Route::get('/shop/gatos/muebles','UserController@shopGatosMuebles');
Route::get('/shop/gatos/higiene','UserController@shopGatosHigiene');
Route::get('/shop/gatos/ropa','UserController@shopGatosRopa');

Route::get('/shop/mamiferos','UserController@shopMamiferos');
Route::get('/shop/mamiferos/alimento','UserController@shopMamiferosAlimento');
Route::get('/shop/mamiferos/transportadoras','UserController@shopMamiferosTransportadoras');

Route::get('/shop/aves','UserController@shopAves');
Route::get('/shop/aves/alimento','UserController@shopAvesAlimento');
Route::get('/shop/aves/transportadoras','UserController@shopAvesTransportadoras');

Route::get('/shop/reptiles','UserController@shopReptiles');
Route::get('/shop/reptiles/alimento','UserController@shopReptilesAlimento');
Route::get('/shop/reptiles/transportadoras','UserController@shopReptilesTransportadoras');

Route::get('/shop/peces','UserController@shopPeces');
Route::get('/shop/peces/alimento','UserController@shopPecesAlimento');
Route::get('/shop/peces/acuarios','UserController@shopPecesAcuarios');
Route::get('/shop/peces/accesorios','UserController@shopPecesAccesorios');

Route::get('/shop/servicios','UserController@shopServicios');



Route::get('/shop/reportesextraviados','UserController@shopReportes');
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

Route::get('/control/registro_mascota','PacienteController@registra');


//AGENDAR

Route::resource('/control/agendar','CitaController');

Route::resource('/control/agendar/calendario','CalendarioController');
Route::resource('/control/agendar/exitoso','AgendaController');

Route::get('/control/registro_vacunas', function () {
    return view('/control/registro_vacunas/index');
});

Route::get('/control/historial_mascota', function () {
    return view('/control/historial_mascota/index');
});

Route::get('/control/historial_personal', function () {
    return view('/control/historial_personal/index');
});

/*
Route::get('/control/registrar_servicio', function () {
    return view('/control/registrar_servicio/index');
});
*/
/*
Route::get('/control/buscar/mascota/encontrado', function () {
    return view('/control/buscar/mascota/encontrado/index');
});
*/
/*
Route::get('/control/buscar/mascota/resultados', function () {
    return view('/control/buscar/mascota/resultados/index');
});*/


/*
Route::get('/control/buscar/dueno/encontrado', function () {
    return view('/control/buscar/dueno/encontrado/index');
});

Route::get('/control/buscar/dueno/resultados', function () {
    return view('/control/buscar/dueno/resultados/index');
});*/

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
Route::post('/duenoseditapass/{id}','DuenoController@updatePassword');
Route::post('/asistenteseditapass/{id}','AsistentesController@updatePassword');

//ruta para los reportes de perros perdidos
Route::resource('/reportes','ReporteController');
                                  
Route::resource('/shop/reportes','ReportesShopController');
//Rutas para las busquedas de mascota y dueño
Route::post('/buscarmascota','ControlController@buscarMascota');
Route::get('/encontrarmascota/{id}','ControlController@datosMascota');

Route::post('/buscardueño','ControlController@buscarDueño');
Route::get('/encontrardueño/{id}','ControlController@datosDueño');

//Regitro de servicio
Route::get('/registrar_servicio/{id}','ControlController@registrarServicio');
Route::post('/control/historial_mascota','ControlController@registraServicio');

//Ruta para las búsquedas de servicios
Route::get('control/historial_personal','ControlController@llenaServiciosRealizados');

Route::get('control/historial_mascota/{id}','ControlController@llenaServiciosRealizadosMascota');

