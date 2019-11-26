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
                <th>Vacuna</th>
                <th>Fecha</th>
                <th>Siguiente Fecha</th>
                <th>Clínica</th>
            </tr>
            @foreach($VacunasMascota as $vacuna)
            <tr>
                <td>
                    <p id="num" name="num">{{$vacuna->id}}</p>
                </td>
                <td>
                    <p id="servicio" name="servicio">{{$vacuna->Vacuna->Nombre_vacuna}}</p>
                </td>
                <td>
                    <p id="fecha" name="fecha">{{$vacuna->Fecha_Vacuna}}</p>
                </td>
                <td>
                    <p id="fecha" name="fecha">{{$vacuna->Fecha_Siguiente_Vacuna}}</p>
                </td>
              
                <td>
                    <p id="clinica" name="clinica">{{$vacuna->Clinica->nombre}}</p>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection