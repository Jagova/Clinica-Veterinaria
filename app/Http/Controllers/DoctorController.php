<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $doctores = \App\Doctor::all();
        $clinicas = \App\Clinica::all();
       // dd($doctores[0]->clinica());
        return view('Doctores.index',
        [
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
        $nuevoDoctor = new \App\Doctor;
        $nuevoDoctor->primer_nombre = $request->get('nombre1');
        $nuevoDoctor->segundo_nombre = $request->get('nombre2');
        $nuevoDoctor->apellido_paterno = $request->get('ApPaterno');
        $nuevoDoctor->apellido_materno = $request->get('ApMaterno');
        $nuevoDoctor->especialidad_1 = $request->get('esp1');
        $nuevoDoctor->especialidad_2 = $request->get('esp2');
        $nuevoDoctor->clinica_id = $request->get('clinica');
        $nuevoDoctor->save();
        return redirect('/doctores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
