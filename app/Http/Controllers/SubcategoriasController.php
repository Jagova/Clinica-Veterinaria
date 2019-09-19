<?php

namespace App\Http\Controllers;

use App\subcategorias;
use Illuminate\Http\Request;

class SubcategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $subcategoria = \App\subcategorias::all();
        return view('Subcategoria.index',
        [
            'Subcategoria' => $subcategoria
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
        $subcategorias = new \App\subcategorias;
        $subcategorias->nombre = $request->get('nombre');
        $subcategorias->save();
        return redirect('/subcategorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subcategorias  $subcategorias
     * @return \Illuminate\Http\Response
     */
    public function show(subcategorias $subcategorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subcategorias  $subcategorias
     * @return \Illuminate\Http\Response
     */
    public function edit(subcategorias $subcategorias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subcategorias  $subcategorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subcategoria = \App\subcategorias::find($id);
        $subcategoria->nombre=$request->get('nombre');
        $subcategoria->save();
        return redirect('/subcategorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subcategorias  $subcategorias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = \App\subcategorias::find($id);
        $categoria->delete();
        return redirect('/subcategorias');
    }
}
