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
                <th>Especie</th>
                <th>Raza</th>
                <th>Dueño</th>
            </tr>
            <a href="/control/maascota/encontrado">
            <tr>
                <td>
                    <p id="num" name="num">1</p>
                </td>
                <td>
                    <p id="mascota-nombre" name="nombre">Loki</p>
                </td>

                <td>
                    <p id="mascota-especie" name="especie">Perro</p>
                </td>
                <td>
                    <p id="mascota-raza" name="raza">Mixta</p>
                </td>
                <td>
                    <p id="mascota-dueno" name="dueno">Tiffany Cortez</p>
                </td>
            </tr>
            </a>
            <tr>
                <td>
                    <p id="num" name="num">2</p>
                </td>
                <td>
                    <p id="mascota-nombre" name="nombre">Loki</p>
                </td>

                <td>
                    <p id="mascota-especie" name="especie">Perro</p>
                </td>
                <td>
                    <p id="mascota-raza" name="raza">Mixta</p>
                </td>
                <td>
                    <p id="mascota-dueno" name="dueno">Tiffany Cortez</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p id="num" name="num">3</p>
                </td>
                <td>
                    <p id="mascota-nombre" name="nombre">Loki</p>
                </td>

                <td>
                    <p id="mascota-especie" name="especie">Perro</p>
                </td>
                <td>
                    <p id="mascota-raza" name="raza">Mixta</p>
                </td>
                <td>
                    <p id="mascota-dueno" name="dueno">Tiffany Cortez</p>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection