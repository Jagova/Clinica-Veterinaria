<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validacionAsistentes extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /** 
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
         'nombre1'=>'required|max:30',
         'nombre2'=>'nullable|max30',
         'apellido1'=>'required|max:30',
         'apellido2'=>'required|max:30',
         'especialidad1'=>'required|max:30',
         'especialidad2'=>'nullable|max:30',
         'telefono'=>'required|max:30',
         'correo'=>'required|max:30',
         'clinica'=>'required'
         //
        ];
    }
    public function messages()
{
    return [
        'nombre1.required' => 'El campo "nombre" es requerido',
        'apellido2.required'  => 'El campo "Apellido materno "es requerido',
        'apellido1.required'  => 'El campo "Apellido paterno "es requerido',
        'especialidad1.required'  => 'El campo "Especialidad 1" es requerido',
        'telefono.required'=>'El campo "Telefono" es requerido',
        'correo.required'=>'El campo "Correo" es requerido',
        'clinica.required'=>'El campo "Clinica" es requerido'
    ];
}
}
