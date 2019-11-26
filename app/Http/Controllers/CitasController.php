<?php

namespace App\Http\Controllers;

use App\Cita;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

        $clinicas = \App\Clinica::all();
       // dd($doctores[0]->clinica());
        return view('control.citas.index',
        [
            'clinicas' => $clinicas
        ]
        );
    }



}
