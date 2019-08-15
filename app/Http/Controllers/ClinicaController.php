<?php

namespace App\Http\Controllers;

use App\Clinica;
use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinicas = \App\Clinica::all();
        return view('Clinicas.index',
        [
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
        return view('Clinicas.create'
    );
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
        $nuevaClinica = new \App\Clinica;
        $nuevaClinica->nombre = $request->get('nombre');
        $nuevaClinica->save();
        return redirect('/clinicas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function show(Clinica $clinica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function edit(Clinica $clinica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clinica $clinica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clinica $clinica)
    {
        //
    }
}
