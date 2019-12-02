<?php

namespace App\Http\Controllers;

use App\medicamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class MedicamentosController extends Controller
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

        $medis = \App\medicamentos::all();
        $clinicas = \App\Clinica::all();
        return view('Medicamentos.index',
        [
            'Medicamentos' => $medis,
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
            'presentacion' => 'required',
            'ml_mg' => 'required',
            'compuesto' => 'required',
            'precio' => 'required',
            'laboratorio' => 'required',
            'paq_unidad' => 'required',
            'controlado' => 'required',
            'fecha_caducidad' => 'required',
            'stock' => 'required',
            'clinica' => 'required',
        ]);


            $ruta = "Medicamentos/medicamentos_ima.png"; 
        //Se revisa si se cargo una imagen     
        if ($request->hasFile('imagen')) 
            { 
                $ruta = $request->imagen->store('Medicamentos','public'); 
            }

        $nmedis = new \App\Medicamentos;
        $nmedis->nombre = $request->get('nombre');
        $nmedis->presentacion = $request->get('presentacion');
        $nmedis->ml_mg = $request->get('ml_mg');
        $nmedis->compuesto = $request->get('compuesto');
        $nmedis->precio = $request->get('precio');
        $nmedis->laboratorio= $request->get('laboratorio');
        $nmedis->paq_unidad= $request->get('paq_unidad');
        $nmedis->controlado= $request->get('controlado');
        $nmedis->fecha_caducidad= $request->get('fecha_caducidad');
        $nmedis->stock= $request->get('stock');
        $nmedis->clinica_id = $request->get('clinica');
        $nmedis->urlImagen = "/storage/".$ruta;

        $nmedis->save();
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
        $request->validate([
        'nombre' => 'required',
        'presentacion' => 'required',
        'ml_mg' => 'required',
        'compuesto' => 'required',
        'precio' => 'required',
        'laboratorio' => 'required',
        'paq_unidad' => 'required',
        'controlado' => 'required',
        'fecha_caducidad' => 'required',
        'stock' => 'required',
        'clinica' => 'required',
        ]);

        $medis = \App\Medicamentos::find($id);

         if ($request->hasFile('imagen')) {
            $ruta = $request->imagen->store('Medicamentos','public');
            $medis->urlImagen = "/storage/".$ruta;
        }


        $medis->nombre = $request->get('nombre');
        $medis->presentacion = $request->get('presentacion');
        $medis->ml_mg = $request->get('ml_mg');
        $medis->compuesto = $request->get('compuesto');
        $medis->precio = $request->get('precio');
        $medis->laboratorio= $request->get('laboratorio');
        $medis->paq_unidad= $request->get('paq_unidad');
        $medis->controlado= $request->get('controlado');
        $medis->fecha_caducidad= $request->get('fecha_caducidad');
        $medis->stock = $request->get('stock');
        $medis->clinica_id = $request->get('clinica');
        $medis->save();
        return redirect('/medicamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medis = \App\Medicamentos::find($id);
        $medis->delete();
        return redirect('/medicamentos');
    }
}
