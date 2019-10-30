<?php

namespace App\Http\Controllers;

use App\medics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class MedicsController extends Controller
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

                $medis = \App\medics::all();
        return view('Medis.index',
        [
            'Medis' => $medis
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $medis = new \App\medics;
        $medis->nombre = $request->get('nombre');
        $medis->presentacion = $request->get('presentacion');
        $medis->ml_mg = $request->get('ml_mg');
        $medis->compuesto = $request->get('compuesto');
        $medis->precio = $request->get('precio');
        $medis->laboratorio= $request->get('laboratorio');
        $medis->paq_unidad= $request->get('paq_unidad');
        $medis->controlado= $request->get('controlado');
        $medis->fecha_caducidad= $request->get('fecha_caducidad');
        $medis->stock= $request->get('stock');
        $medis->save();
        return redirect('/medicamentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medics  $medics
     * @return \Illuminate\Http\Response
     */
    public function show(medics $medics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medics  $medics
     * @return \Illuminate\Http\Response
     */
    public function edit(medics $medics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medics  $medics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $medis = \App\Medics::find($id);
        $medis->nombre = $request->get('nombre');
        $medis->presentacion = $request->get('presentacion');
        $medis->ml_mg = $request->get('ml_mg');
        $medis->compuesto = $request->get('compuesto');
        $medis->precio = $request->get('precio');
        $medis->laboratorio= $request->get('laboratorio');
        $medis->paq_unidad= $request->get('paq_unidad');
        $medis->controlado= $request->get('controlado');
        $medis->fecha_caducidad= $request->get('fecha_caducidad');
        $medis->stock= $request->get('stock');
        $medis->save();
        return redirect('/medicamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medics  $medics
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medis = \App\Medics::find($id);
        $medis->delete();
        return redirect('/medicamentos');
        
    }
}
