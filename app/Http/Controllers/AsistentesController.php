<?php

namespace App\Http\Controllers;

use App\asistentes;
use Illuminate\Http\Request;

class AsistentesController extends Controller
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
        $asistentes = \App\Asistente::all();
        $clinicas = \App\Clinica::all();
        $doctores = \App\Doctor::all();
       // dd($doctores[0]->clinica());
        return view('Asistentes.index',
        [
            'Asistentes'=>$asistentes,
            'Doctores' => $doctores,
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
       
    request()->validate([
            'nombre1' => ['required','max:20', 'min:3'],
            'nombre2' => 'nullable',
            'ApPaterno' =>'required',
            'ApMaterno' =>'required',
            'esp1'=>'required',
            'esp2'=>'required',
            'clinica'=>'required',
            'correo'=>'required',
            'telefono'=>'required|alpha_num'

            
        ]);
       
        $ruta = "Asistentes/circulos_estado-05.png"; 
        //Se revisa si se cargo una imagen     
        if ($request->hasFile('imagen')) {
            $ruta = $request->imagen->store('Asistentes','public');
        }

        $nuevoAsistente = new \App\Asistente;
        $nuevoAsistente->primer_nombre = $request->get('nombre1');
        $nuevoAsistente->segundo_nombre = $request->get('nombre2');
        $nuevoAsistente->apellido_paterno = $request->get('ApPaterno');
        $nuevoAsistente->apellido_materno = $request->get('ApMaterno');
        $nuevoAsistente->urlImagen = "/storage/".$ruta;
        $nuevoAsistente->especialidad_1 = $request->get('esp1');
        $nuevoAsistente->especialidad_2 = $request->get('esp2');
        $nuevoAsistente->clinica_id = $request->get('clinica');
        $nuevoAsistente->correo=$request->get('correo');
        $nuevoAsistente->telefono=$request->get('telefono');
        $nuevoAsistente->save();
        return redirect('/asistentes');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\asistentes  $asistentes
     * @return \Illuminate\Http\Response
     */
    public function show(asistentes $asistentes)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\asistentes  $asistentes
     * @return \Illuminate\Http\Response
     */
    public function edit(asistentes $asistentes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\asistentes  $asistentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        request()->validate([
            'nombre1' => ['required','max:20', 'min:3'],
            'nombre2' => 'nullable',
            'ApPaterno' =>'required',
            'ApMaterno' =>'required',
            'esp1'=>'required',
            'esp2'=>'required',
            'clinica'=>'required',
            'correo'=>'required',
            'telefono'=>'required|alpha_num'

            
        ]);
       
        $asistente = \App\Asistente::find($id);
        $asistente ->primer_nombre = $request->get('nombre1');
        $asistente ->segundo_nombre = $request->get('nombre2');
        $asistente ->apellido_paterno = $request->get('ApPaterno');
        $asistente ->apellido_materno = $request->get('ApMaterno');
        $asistente ->especialidad_1 = $request->get('esp1');
        $asistente->especialidad_2 = $request->get('esp2');
        $asistente->clinica_id = $request->get('clinica');
        $asistente->correo=$request->get('correo');
        $asistente->telefono=$request->get('telefono');
        $asistente->save();
        return redirect('/asistentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\asistentes  $asistentes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $asistente = \App\Asistente::find($id);
        $asistente->delete();
        return redirect('/asistentes');
    }
}
