<?php

namespace App\Http\Controllers;

use App\medicamentos;
use Illuminate\Http\Request;

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medis = \App\medicamentos::all();
        return view('Medicamentos.index',
        [
            'Medicamentos' => $medis
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
        $medis = new \App\Medicamentos;
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
     * @param  \App\medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function show(medicamentos $medicamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(medicamentos $medicamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medis = \App\Medicamentos::find($id);
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
     * @param  \App\medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicamentos $medicamentos)
    {
        $medis = \App\Medicamentos::find($id);
        $medis->delete();
        return redirect('/medicamentos');
    }
}
