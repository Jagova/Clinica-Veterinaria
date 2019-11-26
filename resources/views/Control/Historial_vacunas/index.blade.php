@extends('control.layout')

@section('contenido')
<div class="container-fluid">
    <div class="row justify-content-center m-3">
        <h1 class="mx-auto">Historial de vacunas de la mascota</h1>
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
                <th>Nombre </th>
                <th>Fecha</th>
                <th>Fecha de prxima aplicación</th>
                <th>Clínica</th>
            </tr>
            @foreach($vacunasMascota as $vacuna)
            <tr>
                <td>
                    <p id="num" name="num">{{$vacuna->id}}</p>
                </td>
                <td>
                    <p id="nombre_vacuna" name="nombre_vacuna">{{$vacuna->nombre_vacuna}}</p>
                </td>
                <td>
                    <p id="fecha_Vacuna" name="fecha_Vacuna">{{$vacuna->fecha_Vacuna}}</p>
                </td>
                <td>
                    <p id="fecha_Siguiente_Vacuna" name="fecha_Siguiente_Vacuna">{{$vacuna->fecha_Siguiente_Vacuna}}</p>
                </td>
               
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection