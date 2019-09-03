<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pacientes = \App\Paciente::all();
        //$duenios = \App\Duenios::all();
        $doctores = \App\Doctor::all();
        return view('Pacientes.index',
        [
            'Pacientes' => $pacientes,
            //'Duenios' => $duenios,
            'Doctores' => $doctores
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoPaciente = new \App\Paciente;
        $nuevoPaciente->nombre = $request->get('nombre');
        $nuevoPaciente->edad = $request->get('edad');
        $nuevoPaciente->especie = $request->get('especie');
        $nuevoPaciente->raza = $request->get('raza');
        $nuevoPaciente->duenio_id = $request->get('duenio_id');
        $nuevoPaciente->doctor_id = $request->get('doctor_id');
        $nuevoPaciente->save();
        return redirect('/pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        //El request toma los valores con el name en HTML
        //O sea que el nombre que tengas en el name en HTML es como lo vas a leer aquí. 
        $paciente->nombre = $request->get('nombre');
        $paciente->edad = $request->get('edad');
        $paciente->especie = $request->get('especie');
        $paciente->raza = $request->get('raza');
        $paciente->duenio_id = $request->get('duenio_id');
        $paciente->doctor_id = $request->get('doctor_id');
        $paciente->save();
        return redirect('/pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
        $paciente->delete();
        return redirect('/pacientes');
    }
}
