<?php

namespace App\Http\Controllers;

use App\vacunas;
use Illuminate\Http\Request;

class VacunasController extends Controller
{
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
        //
        $vacunas = \App\vacunas::all();
        $clinicas = \App\Clinica::all();
        return view('vacunas.index',
        [
            'Servicios' => $servicios,
            'Vacunas' => $vacunas
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
        $nuevaVacuna = new \App\Vacuna;
        $nuevaVacuna->nombre_vacuna = $request->get('Nombre_vacuna');
        $nuevaVacuna->fecha_vacuna = $request->get('Fecha_vacuna');
        $nuevaVacuna->fecha_vacuna = $request->get('Fecha_Siguiente_Vacuna');
        $nuevaVacuna->clinica_id = $request->get('clinica');
        $nuevaVacuna->save();
        return redirect('/registro_vacunas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vacunas  $vacunas
     * @return \Illuminate\Http\Response
     */
    public function show(vacunas $vacunas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vacunas  $vacunas
     * @return \Illuminate\Http\Response
     */
    public function edit(vacunas $vacunas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vacunas  $vacunas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vacunas $vacunas)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vacunas  $vacunas
     * @return \Illuminate\Http\Response
     */
    public function destroy(vacunas $vacunas)
    {
        //
    }
}
