@extends('control.buscar.layout')

@section('contenido2')
<div class="container-fluid">
    <div class="row">
        <h3 class="mx-auto">Resultados obtenidos = 5</h3>
    </div>
    <div class="row shadow-lg mx-md-5 p-3">
        <table class="w-100 h-100">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>Correo electrónico</th>
            </tr>
            <a href="/control/maascota/encontrado">
            <tr>
                <td>
                    <p id="num" name="num">1</p>
                </td>
                <td>
                    <p id="dueno-nombre" name="nombre">Tiffany</p>
                </td>

                <td>
                    <p id="dueno-apellido_paterno" name="apellido_paterno">Cortez</p>
                </td>
                <td>
                    <p id="dueno-apellido_materno" name="apellido_materno">Gutiérrez</p>
                </td>
                <td>
                    <p id="dueno-telefono" name="telefono">444 444 44 44</p>
                </td>
                <td>
                    <p id="dueno-correo" name="correo">tiff1@correo.com</p>
                </td>
            </tr>
            </a>
            <tr>
                <td>
                    <p id="num" name="num">1</p>
                </td>
                <td>
                    <p id="dueno-nombre" name="nombre">Tiffany</p>
                </td>

                <td>
                    <p id="dueno-apellido_paterno" name="apellido_paterno">Cortez</p>
                </td>
                <td>
                    <p id="dueno-apellido_materno" name="apellido_materno">Gutiérrez</p>
                </td>
                <td>
                    <p id="dueno-telefono" name="telefono">444 444 44 44</p>
                </td>
                <td>
                    <p id="dueno-correo" name="correo">tiff1@correo.com</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p id="num" name="num">1</p>
                </td>
                <td>
                    <p id="dueno-nombre" name="nombre">Tiffany</p>
                </td>

                <td>
                    <p id="dueno-apellido_paterno" name="apellido_paterno">Cortez</p>
                </td>
                <td>
                    <p id="dueno-apellido_materno" name="apellido_materno">Gutiérrez</p>
                </td>
                <td>
                    <p id="dueno-telefono" name="telefono">444 444 44 44</p>
                </td>
                <td>
                    <p id="dueno-correo" name="correo">tiff1@correo.com</p>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection