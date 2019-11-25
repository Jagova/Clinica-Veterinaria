<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class ControlController extends Controller
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
        //$duenios = \App\Duenios::all();
        $doctores = \App\Doctor::all();
        $duenios = \App\Dueno::all();
        $especies = ["Perro","Gato","Conejo","Reptil","Ave"];
             
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
            'duenio_id' => 'required',
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
        $request->validate([
            'nombre' => 'required | max:200 |  regex:/(^[a-zA-z- ]+$)+/',
            'edad' => 'required | integer | min:0 |regex: /^[0-9]+$/',
            'especie' => 'required ',
            'raza' => 'required | max:200 |  regex:/(^[a-zA-z- ]+$)+/',
            'duenio_id' => 'required',
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

    public function buscarMascota(Request $request)
    {
        $filtro = $request->get('filtro');
        $pacientes = \App\Paciente::all();


        return view('/control/buscar/mascota/resultados/index',
        [
            'Pacientes' => $pacientes,
            'filtro' => $filtro
        ]
    );
    }

    public function datosMascota($id)
    {
        $paciente = \App\Paciente::find($id);
        return view('/control/buscar/mascota/encontrado/index',
        [
            'paciente' => $paciente
        ]
    );
    }

    //Búsqueda Dueño
    public function buscarDueño(Request $request)
    {
        
        $filtro = $request->get('filtro');
        $dueños = \App\Dueno::all();
        return view('/control/buscar/dueno/resultados/index',
        [
            'Dueños' => $dueños,
            'filtro' => $filtro
        ]
    );
    }

    public function datosDueño($id)
    {
        $dueño = \App\Dueno::find($id);
        $pacientes = \App\Paciente::all();
        $pacientesDueño = $pacientes->where('dueno_id','=',$id);

        return view('/control/buscar/dueno/encontrado/index',
        [
            'dueño' => $dueño,
            'Pacientes' => $pacientesDueño
        ]
    );
    }

    //Registro de servicio
    public function registrarServicio($id)
    {
        $Clinicas = \App\Clinica::all();
        $paciente = \App\Paciente::find($id);
        $dueño = \App\Dueno::find($paciente->dueno_id);
        $Servicios = \App\Servicio::all();
        //$pacientesDueño = $pacientes->where('dueno_id','=',$id);

        

        return view('/control/Registrar_servicio/index',
        [
            'Clinicas' => $Clinicas,
            'dueño' => $dueño,
            'paciente' => $paciente,
            'Servicios' => $Servicios
        ]
    );
    }

    public function registraServicio()
    {
        /*
        $Clinicas = \App\Clinica::all();
        $paciente = \App\Paciente::find($id);
        $dueño = \App\Dueno::find($paciente->dueno_id);
        $Servicios = \App\Servicio::all();*/
        //$pacientesDueño = $pacientes->where('dueno_id','=',$id);

        return redirect('/control/historial_mascota');
    }
}
