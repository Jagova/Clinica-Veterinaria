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
            'clinica' => 'required',
            'servicio' => 'required'
        ]);   

        $nuevaCita = new \App\Cita;
        $nuevaCita->mascota = $request->get('mascota');
        $nuevaCita->dueno = $request->get('dueno');
        $nuevaCita->fecha = $request->get('fecha');
        $nuevaCita->estado = "AGENDADO";
        $nuevaCita->clinica_id = $request->get('clinica');
        $nuevaCita->servicio_id = $request->get('servicio');
        $nuevaCita->save();
        return view('control.agendar.exitoso.index');
    }



}
