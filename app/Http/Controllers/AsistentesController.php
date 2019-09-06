<?php

namespace App\Http\Controllers;

use App\asistentes;
use Illuminate\Http\Request;

class AsistentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistentes = \App\Asistente::all();
        $clinicas = \App\Clinica::all();
        $doctores = \App\Doctor::all();
       // dd($doctores[0]->clinica());
        return view('Asistentes.index',
        [
            'Asistentes'=>$asistentes,
            'Doctores' => $doctores,
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
        $nuevoAsistente = new \App\Asistente;
        $nuevoAsistente->primer_nombre = $request->get('nombre1');
        $nuevoAsistente->segundo_nombre = $request->get('nombre2');
        $nuevoAsistente->apellido_paterno = $request->get('ApPaterno');
        $nuevoAsistente->apellido_materno = $request->get('ApMaterno');
        $nuevoAsistente->especialidad_1 = $request->get('esp1');
        $nuevoAsistente->especialidad_2 = $request->get('esp2');
        $nuevoAsistente->clinica_id = $request->get('clinica');
        $nuevoAsistente->corrreo=$request->get('clinica');
        $nuevoAsistente->telefono=$request->get('clinica');
        $nuevoAsistente->save();
        return redirect('/asistentes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\asistentes  $asistentes
     * @return \Illuminate\Http\Response
     */
    public function show(asistentes $asistentes)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\asistentes  $asistentes
     * @return \Illuminate\Http\Response
     */
    public function edit(asistentes $asistentes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\asistentes  $asistentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $asistente = \App\Asistente::find($id);
        $asistente ->primer_nombre = $request->get('nombre1');
        $asistente ->segundo_nombre = $request->get('nombre2');
        $asistente ->apellido_paterno = $request->get('ApPaterno');
        $asistente ->apellido_materno = $request->get('ApMaterno');
        $asistente ->especialidad_1 = $request->get('esp1');
        $asistente->especialidad_2 = $request->get('esp2');
        $asistente->clinica_id = $request->get('clinica');
        $Asistente->corrreo=$request->get('clinica');
        $Asistente->telefono=$request->get('clinica');
        $asistente->save();
        return redirect('/asistentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\asistentes  $asistentes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $asistente = \App\Asistente::find($id);
        $asistente->delete();
        return redirect('/asistentes');
    }
}
