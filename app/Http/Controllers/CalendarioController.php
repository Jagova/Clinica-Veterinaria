<?php

namespace App\Http\Controllers;

use App\Cita;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{


    public function store(Request $request)
    {

        $request->validate([
            'clinica_id' => 'required',
            'servicio_id' => 'required'
        ]);

       
        $clinica_id= $request->get('clinica_id');
        $servicio_id= $request->get('servicio_id');

        $clinica = \App\Clinica::where('id', '=', $clinica_id )->get();
        $servicio = \App\Servicio::where('id', '=', $servicio_id )->get();
        
       
        $ocupados = \App\Cita::where('clinica_id', '=', $clinica_id )->where('servicio_id', '=', $servicio_id )->get();
        
        return view('control.agendar.calendario.index',
        [
            'ocupados'=>$ocupados,
            'clinica'=>$clinica[0],
            'servicio'=>$servicio[0]
        ]
        );
    }

}
