@extends('control.layout')

@section('contenido')
<div class="container-fluid">
    <div class="row justify-content-center m-3">
        <h1 class="mx-auto">Historial de Trabajador</h1>
    </div>
    <div class="row justify-content-center">
        <h5 class="mr-2">Nombre: </h5>
        <p>Jairo Méndez</p>
    </div>
    <div class="row shadow-lg mx-md-5 p-3">
        <table class="w-100 h-100">
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Servicio</th>
                <th>Clínica</th>
                <th>Paciente</th>
                <th>Dueño</th>
                <th>Estado</th>
            </tr>
            <tr>
                <td>
                    <p id="num" name="num">{{$servi->id_servicio}}</p>
                </td>
                <td>
                    <p id="fecha" name="fecha">01/01/2019</p>
                </td>

                <td>
                    <p id="servicio" name="servicio">Corte de Cabello</p>
                </td>
                <td>
                    <p id="clinica" name="clinica">Clínica del Sol</p>
                </td>
                <td>
                    <p id="paciente" name="paciente">Loki</p>
                </td>
                <td>
                    <p id="dueño" name="dueño">Tiffany</p>
                </td>
                <td>
                    <p id="estado" name="estado">Completado</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p id="num" name="num">2</p>
                </td>
                <td>
                    <p id="fecha" name="fecha">01/01/2019</p>
                </td>

                <td>
                    <p id="servicio" name="servicio">Corte de Cabello</p>
                </td>
                <td>
                    <p id="clinica" name="clinica">Clínica del Sol</p>
                </td>
                <td>
                    <p id="paciente" name="paciente">Loki</p>
                </td>
                <td>
                    <p id="dueño" name="dueño">Tiffany</p>
                </td>
                <td>
                    <p id="estado" name="estado">Completado</p>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection