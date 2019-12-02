<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
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
        //
        $doctores = \App\Doctor::all();
        $clinicas = \App\Clinica::all();
       // dd($doctores[0]->clinica());
        return view('Doctores.index',
        [
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
        $request->validate([
            'nombre1' => 'required',
     
            'ApPaterno' => 'required',
            'ApMaterno' => 'required',
            'esp1' => 'required',
            'esp2' => 'required',

            'email' => 'required | unique:users',

            'clinica' => 'required',
        ]);

        /*Agregado Usuario a la tabla Users con la información del doctor*/
        $nombreCompleto = "";
        $nombreUsuario =  $request->get('nombre1');
        $apellidoUsuario = $request->get('ApPaterno');
        $nombreCompleto = $nombreUsuario . ' ' . $apellidoUsuario;
        $nuevoUser = new \App\User;
        $nuevoUser->name = $nombreCompleto;
        $nuevoUser->email = $request->get('email');
        $nuevoUser->rol = 'DOCTOR';
        $nuevoUser->password = Hash::make($request->get('password'));

        $nuevoUser->save();

        //Imagen por defecto
        $ruta = "Doctores/doctor.png"; 
        //Se revisa si se cargo una imagen     
        if ($request->hasFile('imagen')) {
            $ruta = $request->imagen->store('Doctores','public');
        }


        $nuevoDoctor = new \App\Doctor;
        $nuevoDoctor->primer_nombre = $request->get('nombre1');
        $nuevoDoctor->apellido_paterno = $request->get('ApPaterno');
        $nuevoDoctor->apellido_materno = $request->get('ApMaterno');
        $nuevoDoctor->especialidad_1 = $request->get('esp1');
        $nuevoDoctor->especialidad_2 = $request->get('esp2');
        $nuevoDoctor->clinica_id = $request->get('clinica');
        $nuevoDoctor->user_id = $nuevoUser->id;

        //Foto
        $nuevoDoctor->urlImagen = "/storage/".$ruta;


        $nuevoDoctor->save();

        

        return redirect('/doctores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */

   function update(Request $request, $id)
    {
        $request->validate([
            'nombre1' => 'required',
            'ApPaterno' => 'required',
            'ApMaterno' => 'required',
            'esp1' => 'required',
            'esp2' => 'required',
            'clinica' => 'required',
           
        ]); 

        $doctor = \App\Doctor::find($id);

        //Imagen por defecto
        //Se revisa si se cargo una imagen, si no se cargo ninguna imagen, entonces deja almacenada la que ya se tenía 
        if ($request->hasFile('imagen')) {
            $ruta = $request->imagen->store('Doctores','public');
            $doctor->urlImagen = "/storage/".$ruta;
        }

        //El request toma los valores con el name en HTML
        //O sea que el nombre que tengas en el name en HTML es como lo vas a leer aquí. 
        $doctor->primer_nombre = $request->get('nombre1');
        $doctor->apellido_paterno = $request->get('ApPaterno');
        $doctor->apellido_materno = $request->get('ApMaterno');
        $doctor->especialidad_1 = $request->get('esp1');
        $doctor->especialidad_2 = $request->get('esp2');
        $doctor->clinica_id = $request->get('clinica');
        $doctor->save();
        return redirect('/doctores');
    }

    function updatePassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required',
            'confirmapassword' => 'required',
        ]); 

        $doctor = \App\Doctor::find($id);
        $usuario = \App\User::find($doctor->user_id);
        //El request toma los valores con el name en HTML
        //O sea que el nombre que tengas en el name en HTML es como lo vas a leer aquí. 
        $usuario->password = Hash::make($request->get('password'));
        $usuario->save();

        return redirect('/doctores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $doctor = \App\Doctor::find($id);
        $idUsuario = $doctor ->user_id;
        $usuario = \App\User::find($idUsuario);
        $usuario->delete();
        $doctor->delete();
        //dd($doctor);
        return redirect('/doctores');
    }
}
