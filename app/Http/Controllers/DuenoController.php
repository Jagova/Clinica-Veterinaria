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
        $duenos = \App\Duenos::all();
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
        return view('Duenos.create'
    );
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
        $nuevoDueno = new \App\Dueno;
        $nuevoDueno->nombre = $request->get('nombre');
        $nuevoDueno->direccion = $request->get('direccion');
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
        $dueno->nombre = $request->get('nombre');
        $dueno->direccion = $request->get('direccion');
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
        //$clinica = \App\Clinica::find($clinica);
        $dueno->delete();
        return redirect('/duenos');
    }
}
