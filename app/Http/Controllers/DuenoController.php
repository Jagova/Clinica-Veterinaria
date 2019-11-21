<?php

namespace App\Http\Controllers;

use App\Dueno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DuenoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::user()->rol != "ADMINISTRADOR")
        {
            return redirect('/');
        }
        $duenos = \App\Dueno::all();
        return view('Duenos.index',
        [
            'Duenos' => $duenos
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'telefono' => 'required|numeric',
            'direccion' => 'required',
            'celular' => 'required|numeric',
            'rfc' => 'required',
            'codigo_postal' => 'required|numeric',
            'razon_social' => 'required',
            'email' => 'required | unique:users',
        ]);


        //Registro usuario
        $nombreCompleto = "";
        $nombreUsuario =  $request->get('nombre');
        $apellidoUsuario = $request->get('apellido_paterno');
        $nombreCompleto = $nombreUsuario . ' ' . $apellidoUsuario;
        $nuevoUser = new \App\User;
        $nuevoUser->name = $nombreCompleto;
        $nuevoUser->email = $request->get('email');
        $nuevoUser->rol = 'CLIENTE';
        $nuevoUser->password = Hash::make($request->get('password'));
        $nuevoUser->save();

        //REgistro dueño
        $nuevoDueno = new \App\Dueno;
        $nuevoDueno->nombre = $request->get('nombre');
        $nuevoDueno->apellido_paterno = $request->get('apellido_paterno');
        $nuevoDueno->apellido_materno = $request->get('apellido_materno');
        $nuevoDueno->telefono = $request->get('telefono');
        $nuevoDueno->direccion = $request->get('direccion');
        $nuevoDueno->celular = $request->get('celular');
        $nuevoDueno->rfc = $request->get('rfc');
        $nuevoDueno->codigo_postal = $request->get('codigo_postal');
        $nuevoDueno->razon_social = $request->get('razon_social');     
        //Se crea la relacion
        $nuevoDueno->user_id = $nuevoUser->id;
        
        
        $nuevoDueno->save();

        return redirect('/duenos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dueno  $dueno
     * @return \Illuminate\Http\Response
     */
    public function show(Dueno $dueno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dueno  $dueno
     * @return \Illuminate\Http\Response
     */
    public function edit(Dueno $dueno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dueno  $dueno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dueno $dueno)
    {
        //El request toma los valores con el name en HTML
        //O sea que el nombre que tengas en el name en HTML es como lo vas a leer aquí. 
        $validatedData = $arequest->validate([
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'telefono' => 'required|max:255|numeric',
            'direccion' => 'required',
            'celular' => 'required|numeric',
            'rfc' => 'required',
            'codigo_postal' => 'required|numeric',
            'razon_social' => 'required',
            'email' => 'required | unique:users',
        ]);

        $dueno->nombre = $request->get('nombre');
        $dueno->apellido_paterno = $request->get('apellido_paterno');
        $dueno->apellido_materno = $request->get('apellido_materno');
        $dueno->telefono = $request->get('telefono');
        $dueno->direccion = $request->get('direccion');
        $dueno->celular = $request->get('celular');
        $dueno->rfc = $request->get('rfc');
        $dueno->codigo_postal = $request->get('codigo_postal');
        $dueno->razon_social = $request->get('razon_social');
        $dueno->save();
        return redirect('/duenos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dueno  $dueno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dueno $dueno)
    {
        //
        $idUsuario = $dueno -> user_id;
        $usuario = \App\User::find($idUsuario);
        $usuario->delete();
        $dueno->delete();
        return redirect('/duenos');
    }
}
