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
            'Clinicas' => $clinicas,
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
        request()->validate([
            'nombre' => ['required','max:20', 'min:3'],
 
            'fecha' =>'required',
           
                  
        ]);
        $nuevaVacuna = new \App\Vacuna;
        $nuevaVacuna->Nombre_vacuna = $request->get('nombre');
        $nuevaVacuna->Fecha_Vacuna = $request->get('fecha');
        $nuevaVacuna->Fecha_Siguiente_Vacuna = $request->get('fecha_siguiente');
        $nuevaVacuna->paciente_id = $request->get('paciente');
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
    public function update(Request $request, $id)
    {
        //
        $vacuna = \App\vacunas::find($id);

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
