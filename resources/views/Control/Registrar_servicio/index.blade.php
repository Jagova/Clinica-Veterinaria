@extends('control.layout')

@section('contenido')


   
<div class="container-fluid">
    <form id="form1" action="/control/historial_mascota" method="POST">
    @csrf
    @method('POST')
    <div class="row justify-content-center m-3">
        <h1>Registrar Servicio</h1>
    </div> 
    <div class="row shadow mx-md-5 p-3 justify-content-center my-3">
        <h4 class="mr-3" style="font-weight:bold">Clínica </h4>
        <select required class="form-control w-25 min-vw-25" name="clinica_id">
            @foreach ($Clinicas as $clinica)                                  
                <option value="{{$clinica->id}}">{{$clinica->nombre}}</option>
            @endforeach
        </select>

    </div>
    <div class="row shadow-lg mx-md-5 p-3 justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                <label for="servicio" style="font-weight:bold">Servicio</label>
                <select required class="form-control" name="servicio_id">
                    @foreach ($Servicios as $servicio)                                  
                        <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>
                    @endforeach   
                </select>
            </div>

        </div>
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                
                <div class="row">
                    <label for="dueno" style="font-weight:bold">Dueño</label>
                </div>
                <div class="row">
                 <label for="dueno" style="font-weight:bold">{{$dueño->nombre}} {{$dueño->apellido_paterno}}</label>
                </div>
            </div>
            <div class="col-md-4 col-sm-12"> <div class="row">
                    <label for="mascota" style="font-weight:bold">Mascota</label>
                </div>
                <div class="row">
                  <label for="mascota" style="font-weight:bold">{{$paciente->nombre}}</label>
                </div>
            </div>

        </div>
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                <label for="fecha" style="font-weight:bold">Fecha</label>
                <input type="date" min="2019-01-01" max="2025-12-31"  required class="form-control" id="fecha" name="fecha">
            </div>
            <div class="col-md-4 col-sm-12"> 
                <!-- Doctor o asistente -->
                <div class="col-md-4 col-sm-12"> <div class="row">
                        <label for="encargado" style="font-weight:bold">Encargado</label>
                    </div>
                    <div class="row">
                      <label for="encargado" style="font-weight:bold">{{ Auth::user()->name }}</label>
                    </div>
                </div>
            </div>
            
            <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        </div>
                <button type="submit" class="btn-primary px-3 py-2 m-2" >Registrar</button>
    </div>
    </form>    

</div>
    
@endsection