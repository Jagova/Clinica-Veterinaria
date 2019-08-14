<?php

namespace App\Http\Controllers;

use App\ejemploDos;
use Illuminate\Http\Request;

class EjemploDosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('prueba.indexDos',[
            'dato1' => 'hola2',
            'dato2' => 'estaEsLaVistaDos'
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ejemploDos  $ejemploDos
     * @return \Illuminate\Http\Response
     */
    public function show(ejemploDos $ejemploDos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ejemploDos  $ejemploDos
     * @return \Illuminate\Http\Response
     */
    public function edit(ejemploDos $ejemploDos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ejemploDos  $ejemploDos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ejemploDos $ejemploDos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ejemploDos  $ejemploDos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ejemploDos $ejemploDos)
    {
        //
    }
}
