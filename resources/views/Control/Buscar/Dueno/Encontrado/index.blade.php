@extends('control.buscar.layout')

@section('contenido2')
<div class="container-fluid">
    <div class="row shadow-lg mx-md-5 p-3">
        <table class="w-100 h-100">
            <tr class="mh-100">
                <td>
                    <label for="dueno-nombre" style="font-weight:bold">Nombre</label>
                    <p id="dueno-nombre" name="nombre">{{$dueño->nombre}}</p>
                </td>
                <td>
                    <label for="dueno-apellido_paterno" style="font-weight:bold">Apellido Paterno</label>
                    <p id="dueno-apellido_paterno" name="apellido_paterno">{{$dueño->apellido_paterno}}</p>
                </td>
                <td>
                    <label for="dueno-apellido_materno" style="font-weight:bold">Apellido Materno</label>
                    <p id="dueno-apellido_materno" name="apellido_materno">{{$dueño->apellido_materno}}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dueno-telefono" style="font-weight:bold">Teléfono</label>
                    <p id="dueno-telefono" name="telefono">{{$dueño->telefono}}</p>
                </td>
                
                <td>
                    <label for="dueno-direccion" style="font-weight:bold">Dirección</label>
                    <p id="dueno-direccion" name="direccion">{{$dueño->direccion}}</p>
                </td>
                <td>
                    <label for="dueno-cp" style="font-weight:bold">Código Postal</label>
                    <p id="dueno-cp" name="cp">{{$dueño->codigo_postal}}</p>
                </td>
                
                
            </tr>
            <tr>
                <td>
                    <label for="dueno-celular" style="font-weight:bold">Celular</label>
                    <p id="dueno-celular" name="celular">{{$dueño->celular}}</p>
                </td>
                <td>
                    <label for="dueno-correo" style="font-weight:bold">Correo electrónico</label>
                    <p id="dueno-correo" name="dueno">{{$dueño->User->email}}</p>
                </td>
                <td>
                    <label for="dueno-rfc" style="font-weight:bold">RFC</label>
                    <p id="dueno-rfc" name="rfc">{{$dueño->rfc}}</p>
                </td>
                <td>
                    <label for="dueno-razon_social" style="font-weight:bold">Razón Social</label>
                    <p id="dueno-razon_social" name="razon_social">{{$dueño->razon_social}}</p>
                </td>
            </tr>
        </table>

    </div>

    
    <div class="row justify-content-center w-100  m-5">
            <h3>Mascotas</h3>
    </div>
    <div class="row shadow-lg mx-md-5 p-3">
    <table class="w-100 h-100">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Raza</th>
            </tr>
            @foreach ($Pacientes as $paciente)
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
                </tr>
               
            @endforeach
            
    </table>
    </div>
</div>
@endsection