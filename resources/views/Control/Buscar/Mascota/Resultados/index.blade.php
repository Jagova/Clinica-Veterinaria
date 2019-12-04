@extends('control.buscar.layout')

@section('contenido2')
<div class="container-fluid">
    <div class="row shadow-lg mx-md-5 p-3">
        <table class="w-100 h-100">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Raza</th>
                <th>Dueño</th>
                <th></th>
            </tr>       
                @foreach ($Pacientes as $paciente)
                @if (strpos($paciente->nombre, $filtro) !== false || $filtro == '')
                    <tr>
                        <td>
                            <p id="num" name="num">{{$paciente->id}}</p>
                        </td>
                        <td>
                            <p id="mascota-nombre" name="nombre">{{$paciente->nombre}}</p>
                        </td>
        
                        <td>
                            <p id="mascota-especie" name="especie">{{$paciente->especie}}</p>
                        </td>
                        <td>
                            <p id="mascota-raza" name="raza">{{$paciente->raza}}</p>
                        </td>
                        <td>
                            <p id="mascota-dueno" name="dueno">{{$paciente->Dueno->nombre}} {{$paciente->Dueno->apellido_paterno}}</p>
                        </td>
                        <td>
                        <a href="/encontrarmascota/{{$paciente->id}}">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        </td>
                    </tr>
                   
                @endif
                @endforeach
                
        </table>
    </div>
</div>
@endsection