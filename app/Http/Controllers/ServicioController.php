<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $servicios = \App\Servicio::all();
        $clinicas = \App\Clinica::all();
       // dd($doctores[0]->clinica());
        return view('Servicios.index',
        [
            'Servicios' => $servicios,
            'Clinicas' => $clinicas
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
        $nuevoServicio = new \App\Servicio;
        $nuevoServicio->nombre = $request->get('nombre');
        $nuevoServicio->precio = $request->get('precio');
        $nuevoServicio->clinica_id = $request->get('clinica');
        $nuevoServicio->save();
        return redirect('/clinicas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        //
        //$doctor = \App\Doctor::find($id);
        $servicio->nombre = $request->get('nombre');
        $servicio->precio = $request->get('precio');
        $servicio->clinica_id = $request->get('clinica');
        $servicio->save();
        return redirect('/servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        //
        $servicio->delete();
        //dd($doctor);
        return redirect('/servicios');
    }
}
