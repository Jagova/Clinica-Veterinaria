@extends('control.layout')

@section('contenido')

   
<div class="container-fluid">
    <div class="row justify-content-center m-3">
        <h1>Hacer una cita</h1>
    </div> 
    <form action="/control/citas/porclinica" method="POST">
                            @csrf
                            @method('POST')
    <div class="row shadow mx-md-5 p-3 justify-content-center my-3">
        <h4 class="mr-3" style="font-weight:bold">Clínica </h4>
        <select required class="form-control w-25 min-vw-25" name="clinica_id">
            @foreach ($clinicas as $clinica)                                  
                <option value="{{$clinica->id}}">{{$clinica->nombre}} </option>
            @endforeach          
        </select>

    </div>
    <div class="row shadow-lg mx-md-5 p-3 justify-content-center">

        <div class="row w-100 justify-content- m-3">
            <div class="ml-auto">
                <button class="btn-primary p-2" type="submit">Siguiente</button>

            </div>

        </div>
    </form>
        
    </div>
                

</div>


    
@endsection