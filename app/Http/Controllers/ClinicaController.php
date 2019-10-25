<?php

namespace App\Http\Controllers;

use App\Clinica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class ClinicaController extends Controller
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

        if( Auth::user()->rol !='ADMINISTRADOR') 
        {
            return redirect('/');
        }


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
        return view('Clinicas.create');
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
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required'
        ]);

        $nuevaClinica = new \App\Clinica;
        $nuevaClinica->nombre = $request->get('nombre');
        $nuevaClinica->direccion = $request->get('direccion');
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
        //El request toma los valores con el name en HTML
        //O sea que el nombre que tengas en el name en HTML es como lo vas a leer aquí.
        
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required'
        ]);
        
        $clinica->nombre = $request->get('nombre');
        $clinica->direccion = $request->get('direccion');
        $clinica->save();
        return redirect('/clinicas');
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
        //$clinica = \App\Clinica::find($clinica);
        //dd($clinica);
        $clinica->delete();
        return redirect('/clinicas');
    }
}
