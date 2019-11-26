@extends('control.layout')

@section('contenido')
<div class="container-fluid">
    <div class="row justify-content-center m-3">
        <h1 class="mx-auto">Historial de Servicios</h1>
    </div>
   <!-- 
    <div class="row justify-content-center">
        <h5 class="mr-2">Nombre: </h5>
        <p>Jairo Méndez</p>
    </div>-->
    <div class="row shadow-lg mx-md-5 p-3">
        <table class="w-100 h-100">
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Servicio</th>
                <th>Realizado por </th>
                <th>Clínica</th>
                <th>Paciente</th>
                <th>Dueño</th>
            </tr>
            @foreach($Servicios as $servicio)
            <tr>
                <td>
                    <p id="num" name="num">{{$servicio->id}}</p>
                </td>
                <td>
                    <p id="fecha" name="fecha">{{$servicio->fecha}}</p>
                </td>

                <td>
                    <p id="servicio" name="servicio">{{$servicio->Servicio->nombre}}</p>
                </td>
                <td>
                    <p id="servicio" name="servicio">{{$servicio->User->name}}</p>
                </td>
                <td>
                    <p id="clinica" name="clinica">{{$servicio->Clinica->nombre}}</p>
                </td>
                <td>
                    <p id="paciente" name="paciente">{{$servicio->Paciente->nombre}}</p>
                </td>
                <td>
                    <p id="dueño" name="dueño">{{$servicio->Paciente->Dueno->nombre}} {{$servicio->Paciente->Dueno->apellido_paterno}}</p>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
