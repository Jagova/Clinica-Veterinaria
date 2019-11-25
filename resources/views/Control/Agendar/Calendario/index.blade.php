
@extends('control.layout')

@section('contenido')

   
<div class="container-fluid">
    <div class="row justify-content-center m-3">
        <h1>Hacer una cita</h1>
    </div> 

    <div class="row shadow-lg mx-md-5 p-3 justify-content-center">
    <form action="/control/agendar/exitoso" method="POST">
                            @csrf
                            @method('POST')
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                <label for="clinica" style="font-weight:bold">Clínica</label>
                    
                <p id="c" name="c">{{$clinica->nombre}}</p>
                <input type="hidden" id="clinica" name="clinica" value="{{$clinica->id}}">
            </div>
            <div class="col-md-4 col-sm-12"> 
                <label for="servicio" style="font-weight:bold">Servicio</label>
                 <p id="s" name="s" >{{$servicio->nombre}}</p>
                 <input type="hidden" id="servicio" name="servicio" value="{{$servicio->id}}">
            </div>

        </div>
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                <label for="dueno" style="font-weight:bold">Dueño</label>
                
                <input type="text" class="form-control" id="dueno" name="dueno"  >
            </div>
            <div class="col-md-4 col-sm-12"> 
                <label for="mascota" style="font-weight:bold">Mascota</label>
                
                <input type="text" class="form-control" id="mascota" name="mascota"  >
            </div>

        </div>
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                <label for="fecha" style="font-weight:bold">Fecha: </label>
                
                <input type=text id="fecha" name="fecha" >
            </div>
            <div id="calendar"></div>

        </div>
        <div class="row w-100 justify-content- m-3">
            <div class="ml-auto">
                <button class="btn-primary p-2" type="submit">Agendar</button>

            </div>

        </div>
    </form>
        
    </div>
                

</div>


    
@endsection