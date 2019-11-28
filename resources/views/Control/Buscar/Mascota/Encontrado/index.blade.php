
@extends('control.buscar.layout')

@section('contenido2')
<div class="container-fluid">
    <div class="row shadow-lg mx-md-5 p-3 w-100">
        <table class="w-100 h-100">
            <tr class="mh-100">
                <td class="w-25 h-100">
                    <div class="card shadow h-100" style="width: 18rem;">
                        <img src="{{ $paciente->urlImagen }}" class="card-img-top" alt="...">
                    </div>
                </td>
                <td>
                    <label for="mascota-nombre" style="font-weight:bold">Nombre</label>
                <p id="mascota-nombre" name="nombre">{{$paciente->nombre}}</p>
                </td>
                <td>
                    <label for="mascota-edad" style="font-weight:bold">Edad</label>
                    <p id="mascota-edad" name="edad">{{$paciente->edad}}</p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label for="mascota-especie" style="font-weight:bold">Especie</label>
                    <p id="mascota-especie" name="especie">{{$paciente->especie}}</p>
                </td>
                
                <td>
                    <label for="mascota-raza" style="font-weight:bold">Raza</label>
                    <p id="mascota-raza" name="raza">{{$paciente->raza}}</p>
                </td>
                
            </tr>
            <tr>
                <td></td>
                <td>
                    <label for="mascota-dueno" style="font-weight:bold">Dueño</label>
                <p id="mascota-dueno" name="dueno">{{$paciente->Dueno->nombre}} {{$paciente->Dueno->apellido_paterno}}</p>
                </td>
                <td>
                    <label for="mascota-doctor" style="font-weight:bold">Doctor</label>
                    <p id="mascota-doctor" name="doctor">{{$paciente->Doctor->primer_nombre}} {{$paciente->Doctor->apellido_paterno}}</p>
                </td>
            </tr>
        </table>

        <div class="col-6 ml-auto">
            
            <a href="/control/historial_mascota/{{$paciente->id}}">
                <button class="btn-primary p-3 m-2" >Ver historial</button>
            </a>
            <a href="/registrar_servicio/{{$paciente->id}}">
                <button class="btn-primary p-3 m-2" >Registrar servicio</button>
            </a>
            <a href="/registro_vacunas/{{$paciente->id}}">
                <button class="btn-primary p-3 m-2" >Registro de vacunas</button>
            </a>
        </div>
        
    </div>

</div>
@endsection