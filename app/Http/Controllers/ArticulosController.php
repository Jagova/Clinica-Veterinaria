<?php

namespace App\Http\Controllers;

use App\articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $artis = \App\articulos::all();
        return view('Articulos.index',
        [
            'Articulos' => $artis
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
         $articulo = new \App\articulos;
        $articulo->nombre = $request->get('nombre');
        $articulo->preciocom = $request->get('preciocom');
        $articulo->marca = $request->get('marca');
        $articulo->stock = $request->get('stock');
        $articulo->fecha_cad = $request->get('fecha_cad');
        $articulo->precio_u = $request->get('precio_u');
        $articulo->save();
        return redirect('/articulos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function show(articulos $articulos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function edit(articulos $articulos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artis = \App\articulos::find($id);
        $artis->nombre=$request->get('nombre');
        $artis->precioCom=$request->get('preciocom');
        $artis->marca=$request->get('marca');
        $artis->stock=$request->get('stock');
        $artis->fecha_cad=$request->get('fecha_cad');
        $artis->precio_u=$request->get('precio_u');
        $artis->save();
        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $artis = \App\articulos::find($id);
        $artis->delete();
        return redirect('/articulos');
    }
}
