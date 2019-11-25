@extends('control.layout')

@section('contenido')
<div class="container-fluid">
    <div class="row justify-content-center m-3">
        <h1 class="mx-auto">Historial de mascota</h1>
    </div>
    <div class="row justify-content-center">
        <h5 class="mr-2">Mascota: </h5>
        <p>{{$mascota->nombre}}</p>
        <h5 class="ml-5 mr-2">Dueño: </h5>
        <p>{{$mascota->Dueno->nombre}} {{$mascota->Dueno->apellido_paterno}}</p>
    </div>
    <div class="row shadow-lg mx-md-5 p-3">
        <table class="w-100 h-100">
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Servicio</th>
                <th>Clínica</th>
            </tr>
            @foreach($ServiciosMascota as $servicio)
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
                    <p id="clinica" name="clinica">{{$servicio->Clinica->nombre}}</p>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection