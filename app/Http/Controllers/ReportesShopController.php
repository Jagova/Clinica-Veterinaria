<?php

namespace App\Http\Controllers;

use App\Reporte;
use App\ReportesShop;

use Illuminate\Http\Request;

class ReportesShopController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $reporteperdidos = \App\Reporte::all();
        $estados=["Abierto","Cerrado"];

        return view('\shop\reportes.index',
        [
            'Reporteperdidos' => $reporteperdidos,
            'Estados' => $estados
        ]
        );
    }

    public function reportesMascotasPerdidas()
    {
        $reporteperdidos = \App\Reporte::all();
        $estados=["Abierto","Cerrado"];

        return view('shop.reportes.index_reportes',
        [
            'reportesPerdidos' => $reporteperdidos,
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
        return redirect('/shop/reportes/');
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
        return redirect('/shop/reportes');
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
        return redirect('/shop/reportes');
    }
}
