<?php

namespace App\Http\Controllers;

use App\Cita;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request)
    {
            
        $request->validate([
            'mascota' => 'required | max:200 | regex:/(^[a-zA-z- ]+$)+/',
            'dueno' => 'required | max:200 | regex:/(^[a-zA-z- ]+$)+/',
            'fecha' => 'required ',
            'estado' => 'required',
            'clinica_id' => 'required',
            'servicio_id' => 'required'
        ]);

       

        $nuevaCita = new \App\Cita;
        $nuevaCita->mascota = $request->get('nombre');
        $nuevaCita->dueno = $request->get('edad');
        $nuevaCita->fecha = $request->get('especie');
        $nuevaCita->estado = "AGENDADO";
        $nuevaCita->clinica_id = $request->get('clinica_id');
        $nuevaCita->servicio_id = $request->get('servicio_id');
        $nuevaCita->save();
        return redirect('/control/agendar/exitoso');
    }
}