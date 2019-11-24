<?php

namespace App\Http\Controllers;

use App\Reporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 


class ReporteController extends Controller
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


        $reporteperdidos = \App\Reporte::all();
        $estados=["Abiero","Cerrado"];

        return view('Reporte_mascotas_perdidas.index',
        [
            'Reporteperdidos' => $reporteperdidos,
            'Estados' => $estados
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
         
         $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'estado' => 'required',
            'fecha' => 'required',
        ]);

        $ruta = "Reportes/sinimagen.png"; 

        //Se revisa si se cargo una imagen     
        if ($request->hasFile('imagenStore')) 
        { 
            $ruta = $request->imagenStore->store('Reportes','public'); 
        }


        $nreporte = new \App\Reporte;
        $nreporte->titulo = $request->get('titulo');
        $nreporte->descripcion = $request->get('descripcion');
        $nreporte->estado = $request->get('estado');
        $nreporte->fecha = $request->get('fecha');

        $nreporte->urlImagen = "/storage/".$ruta;

        $nreporte->save();
        return redirect('/reportes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte $reporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporte $reporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte $reporte)
    {

        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'estado' => 'required',
            'fecha' => 'required',
        ]);

        $ruta = "Reportes/sinimagen.png"; 

        
        //Se revisa si se cargo una imagen     
        if ($request->hasFile('imagenUpdate')) 
        { 
            $ruta = $request->imagenUpdate->store('Reportes','public'); 
            $reporte->urlImagen = "/storage/".$ruta;
        }

        
        $reporte->titulo = $request->get('titulo');
        $reporte->descripcion = $request->get('descripcion');
        $reporte->fecha = $request->get('fecha');
        $reporte->estado = $request->get('estado');

        $reporte->urlImagen = "/storage/".$ruta;

        $reporte->save();
        return redirect('/reportes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {
         $reporte->delete();
        return redirect('/reportes');
    }
}
