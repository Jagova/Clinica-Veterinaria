<?php

namespace App\Http\Controllers;

use App\Dueno;
use Illuminate\Http\Request;

class DuenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'nombre' => 'required|max:255',
            'apellido_paterno' => 'required|max:255',
            'apellido_materno' => 'required|max:255',
            'telefono' => 'required|max:255|numeric',
            'direccion' => 'required|max:255',
            'celular' => 'max:255|numeric',
            'correo' => 'required|max:255|email_address',
            'rfc' => 'max:255',
            'codigo_postal' => 'required|max:5|numeric',
            'razon_social' => 'max:255'
        ]);
        $nuevoDueno = new \App\Dueno;
        $nuevoDueno->nombre = $request->get('nombre');
        $nuevoDueno->apellido_paterno = $request->get('apellido_paterno');
        $nuevoDueno->apellido_materno = $request->get('apellido_materno');
        $nuevoDueno->telefono = $request->get('telefono');
        $nuevoDueno->direccion = $request->get('direccion');
        $nuevoDueno->celular = $request->get('celular');
        $nuevoDueno->correo = $request->get('correo');
        $nuevoDueno->rfc = $request->get('rfc');
        $nuevoDueno->codigo_postal = $request->get('codigo_postal');
        $nuevoDueno->razon_social = $request->get('razon_social');
        
    
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
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellido_paterno' => 'required|max:255',
            'apellido_materno' => 'required|max:255',
            'telefono' => 'required|max:255|numeric',
            'direccion' => 'required|max:255',
            'celular' => 'required|max:255|numeric',
            'correo' => 'required|max:255|email_address',
            'rfc' => 'required|max:255',
            'codigo_postal' => 'required|max:5|numeric',
            'razon_social' => 'required|max:255'
        ]);

        $dueno->nombre = $request->get('nombre');
        $dueno->apellido_paterno = $request->get('apellido_paterno');
        $dueno->apellido_materno = $request->get('apellido_materno');
        $dueno->telefono = $request->get('telefono');
        $dueno->direccion = $request->get('direccion');
        $dueno->celular = $request->get('celular');
        $dueno->correo = $request->get('correo');
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
        $dueno->delete();
        return redirect('/duenos');
    }
}
