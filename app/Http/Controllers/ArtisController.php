<?php

namespace App\Http\Controllers;

use App\artis;
use Illuminate\Http\Request;

class ArtisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artis = \App\artis::all();
        return view('Artis.index',
        [
            'Artis' => $artis
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


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $articulo = new \App\artis;
        $articulo->nombre = $request->get('nombre');
        $articulo->precioCompra = $request->get('precioCompra');
        $articulo->marca = $request->get('marca');
        $articulo->stock = $request->get('stock');
        $articulo->fecha_cad = $request->get('fecha_cad');
        $articulo->precio_u = $request->get('precio_u');
        $articulo->save();
        return redirect('/artis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\artis  $artis
     * @return \Illuminate\Http\Response
     */
    public function show(artis $artis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artis  $artis
     * @return \Illuminate\Http\Response
     */
    public function edit(artis $artis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artis  $artis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artis $artis)
    {
        $artis->nombre=$request->get('nombre');
        $artis->precioCompra=$request->get('precioCompra');
        $artis->marca=$request->get('marca');
        $artis->stock=$request->get('stock');
        $artis->fecha_cad=$request->get('fecha_cad');
        $artis->precio_u=$request->get('precio_u');
        $artis->save();
        return redirect('/artis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artis  $artis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artis = \App\artis::find($id);
        $artis->delete();
        return redirect('/artis');
    }
}
