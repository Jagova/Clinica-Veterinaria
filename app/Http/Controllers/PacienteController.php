<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class PacienteController extends Controller
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
        if(Auth::user()->rol != "ADMINISTRADOR")
        {
            return redirect('/');
        }
        //
        $pacientes = \App\Paciente::all();
        $doctores = \App\Doctor::all();
        $duenios = \App\Dueno::all();
        $especies = ["Perro","Gato","Conejo","Reptil","Ave"];
        return view('Pacientes.index',
        [
            'Pacientes' => $pacientes,
            'Duenios' => $duenios,
            'Doctores' => $doctores,
            'Especies' =>$especies
        ]

        );       
    }

    public function registra(){

       /* if(Auth::user()->rol != "ADMINISTRADOR")
        {
            return redirect('/');
        }*/
        //
        $pacientes = \App\Paciente::all();
        $doctores = \App\Doctor::all();
        $duenios = \App\Dueno::all();
        $especies = ["Perro","Gato","Conejo","Reptil","Ave"];
        return view('Control.registro_mascota.index',
        [
            'Pacientes' => $pacientes,
            'Duenios' => $duenios,
            'Doctores' => $doctores,
            'Especies' =>$especies
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
        //Se pone una imagen por defecto
    
        $request->validate([
            'nombre' => 'required | max:200 | regex:/(^[a-zA-z- ]+$)+/',
            'edad' => 'required | integer | min:0 | regex: /^[0-9]+$/',
            'especie' => 'required ',
            'raza' => 'required | max:200 | regex:/(^[a-zA-z- ]+$)+/',
            'dueno_id' => 'required',
            'doctor_id' => 'required'
        ]);

        //Imagen por defecto
        $ruta = "Pacientes/pet.jpg"; 
        //Se revisa si se cargo una imagen     
        if ($request->hasFile('imagen')) {
            $ruta = $request->imagen->store('Pacientes','public');
        }

        $nuevoPaciente = new \App\Paciente;
        $nuevoPaciente->nombre = $request->get('nombre');
        $nuevoPaciente->edad = $request->get('edad');
        $nuevoPaciente->especie = $request->get('especie');
        $nuevoPaciente->raza = $request->get('raza');
        $nuevoPaciente->urlImagen = "/storage/".$ruta;
        $nuevoPaciente->dueno_id = $request->get('dueno_id');
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
        $request->validate([
            'nombre' => 'required | max:200 |  regex:/(^[a-zA-z- ]+$)+/',
            'edad' => 'required | integer | min:0 |regex: /^[0-9]+$/',
            'especie' => 'required ',
            'raza' => 'required | max:200 |  regex:/(^[a-zA-z- ]+$)+/',
            'dueno_id' => 'required',
            'doctor_id' => 'required'
        ]);

        //Imagen por defecto
        //Se revisa si se cargo una imagen     
        if ($request->hasFile('imagen')) {
            $ruta = $request->imagen->store('Pacientes','public');
            $paciente->urlImagen = "/storage/".$ruta;
        }

        //El request toma los valores con el name en HTML
        //O sea que el nombre que tengas en el name en HTML es como lo vas a leer aquí. 
        $paciente->nombre = $request->get('nombre');
        $paciente->edad = $request->get('edad');
        $paciente->especie = $request->get('especie');
        $paciente->raza = $request->get('raza');


        $paciente->dueno_id = $request->get('dueno_id');
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
