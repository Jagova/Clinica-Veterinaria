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
        $articulo = \App\articulos::all();

        $clinicas = \App\Clinica::all();

        $subcategoria = \App\subcategorias::all();

        $categoria = \App\categoria::all();

        return view('Articulos.index',
        [
            'Articulos' => $articulo,
            'Clinicas' => $clinicas,
            'Subcategoria' => $subcategoria,
            'Categoria' => $categoria 
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
            'nombre' => 'required',
            'preciocom' => 'required',
            'marca' => 'required',
            'stock' => 'required',
            'fecha_cad' => 'required',
            'precio_u' => 'required',
            'categoria'=> 'required',
            'subcategoria' =>'required',
            'clinica' => 'required',
        ]);


        $narticulo = new \App\articulos;
        $narticulo->nombre = $request->get('nombre');
        $narticulo->preciocom = $request->get('preciocom');
        $narticulo->marca = $request->get('marca');
        $narticulo->stock = $request->get('stock');
        $narticulo->fecha_cad = $request->get('fecha_cad');
        $narticulo->precio_u = $request->get('precio_u');
        $narticulo->categoria_id = $request->get('categoria');
        $narticulo->subcategoria_id = $request->get('subcategoria');
        $narticulo->clinica_id = $request->get('clinica');

        $narticulo->save();
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

            $request->validate([
            'nombre' => 'required',
            'preciocom' => 'required',
            'marca' => 'required',
            'stock' => 'required',
            'fecha_cad' => 'required',
            'precio_u' => 'required',
            'categoria'=> 'required',
            'subcategoria' =>'required',
            'clinica' => 'required',
        ]);

        $articulo = \App\articulos::find($id);
        $articulo->nombre=$request->get('nombre');
        $articulo->precioCom=$request->get('preciocom');
        $articulo->marca=$request->get('marca');
        $articulo->stock=$request->get('stock');
        $articulo->fecha_cad=$request->get('fecha_cad');
        $articulo->precio_u=$request->get('precio_u');
        $articulo->categoria_id = $request->get('categoria');
        $articulo->subcategoria_id = $request->get('subcategoria');
        $articulo->clinica_id = $request->get('clinica');
        $articulo->save();
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
         $articulo = \App\articulos::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }
}
