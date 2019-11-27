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
        $clinica_id=$request->get('clinica_id');
   
        $ocupados = \App\Cita::where('clinica_id', '=', $clinica_id )->get();
        
        return view('control.citas.porclinica.index',
        [
            'ocupados'=>$ocupados
        ]
        );
    }

    public function destroy($id)
    {
        //
        $cita = \App\Cita::find($id);
        $cita->delete();
        return redirect('control/citas/porclinica');
    }
}
