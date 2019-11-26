<?php

namespace App\Http\Controllers;

use App\Cita;
use Illuminate\Http\Request;

class CitasPorClinicaController extends Controller
{


    public function store(Request $request)
    {

        $request->validate([
            'clinica_id' => 'required',
        ]);


       
        $ocupados = \App\Cita::where('clinica_id', '=', $clinica_id )->get();
        
        return view('control.citas.PorClinica.index',
        [
            'ocupados'=>$ocupados
        ]
        );
    }

}
