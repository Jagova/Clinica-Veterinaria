
<!--Vista para el resultado de las búsquedas a doctores-->

@extends('control.buscar.layout')

@section('contenido2')
<div class="container-fluid">
    <!--<div class="row">
        <h3 class="mx-auto">Resultados obtenidos = 5</h3>
    </div>-->
    <div class="row shadow-lg mx-md-5 p-3">
        <table class="w-100 h-100">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>Correo</th>

            </tr>
                    @foreach ($Dueños as $dueño)
                    @if (strpos($dueño->nombre, $filtro) !== false || $filtro == '')
                        <tr>
                            <td>
                                <p id="num" name="num">{{$dueño->id}}</p>
                            </td>
                            <td>
                                <p id="dueno-nombre" name="nombre">{{$dueño->nombre}}</p>
                            </td>
                            <td>
                                    <p id="dueno-apellido_paterno" name="apellido_paterno">{{$dueño->apellido_paterno}}</p>
                            </td>
                            <td>
                                    <p id="dueno-apellido_materno" name="apellido_materno">{{$dueño->apellido_materno}}</p>
                                </td>
                            <td>
                                    <p id="dueno-telefono" name="telefono">{{$dueño->telefono}}</p>
                            </td>
                            <td>
                                    <p id="dueno-email" name="email">{{$dueño->User->email}}</p>
                            </td>
                            <td>
                            <a href="/encontrardueño/{{$dueño->id}}">
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
