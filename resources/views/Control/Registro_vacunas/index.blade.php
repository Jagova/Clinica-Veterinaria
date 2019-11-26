@extends('control.layout') 

@section('contenido')


   
<div class="container-fluid">
    <form id="form1" action="/control/historial_vacunas" method="POST">
    @csrf
    @method('POST')
    <div class="row justify-content-center m-3">
        <h1>Registrar Vacuna</h1>
    </div> 
    <div class="row shadow mx-md-5 p-3 justify-content-center my-3">
        <h4 class="mr-3" style="font-weight:bold">Clínica </h4>
        <select required class="form-control w-25 min-vw-25" name="clinica_id">
            @foreach ($Clinicas as $clinica)                                  
                <option value="{{$clinica->id}}">{{$clinica->nombre}}</option>
            @endforeach
        </select>

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
            <div class="col-md-4 col-sm-12"> <div class="row">
                    <label for="encargado" style="font-weight:bold">Encargado</label>
                </div>
                <div class="row">
                  <label for="encargado" style="font-weight:bold">{{ Auth::user()->name }}</label>
                </div>
            </div>
        </div>
    <div class="row shadow-lg mx-md-5 p-3 justify-content-center">
        
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                <label for="vacuna" style="font-weight:bold">Vacuna</label>
                <input type="text" required  id="nombre_vacuna" name="nombre_vacuna">
            </div>
            
        </div>
        
        <div class="row shadow-lg mx-md-5 p-3 justify-content-center">
            <div class="row w-100 justify-content-center">
                    <div class="col-md-5 col-sm-12"> 
                            <label for="fecha" style="font-weight:bold">Fecha de la aplicación</label>
                            <input type="date" min="2019-01-01" max="2025-12-31"  required class="form-control" id="fecha_Vacuna" name="fecha_Vacuna">
                        </div>
                        <div class="col-md-5 col-sm-12"> 
                            <label for="fecha" style="font-weight:bold">Fecha de la siguiente aplicación</label>
                            <input type="date" min="2019-01-01" max="2025-12-31"  required class="form-control" id="fecha_Siguiente_Vacuna" name="fecha_Siguiente_Vacuna">
                        </div>
            </div>
        </div>
       
        <div class="row w-100 justify-content-center">
           
            <div class="col-md-4 col-sm-12"> 
                <!-- Doctor o asistente -->
               
            </div>
            
            <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        </div>
                <button type="submit" class="btn-primary px-3 py-2 m-2" >Registrar</button>
    </div>
   
    <button type="submit" class="btn-primary px-3 py-2 m-2" >Ver historial de vacunas</button>
           
    </form>    

</div>
    
@endsection