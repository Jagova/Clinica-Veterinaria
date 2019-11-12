@extends('control.buscar.layout')

@section('contenido2')
<div class="container-fluid">
    <div class="row shadow-lg mx-md-5 p-3">
        <table class="w-100 h-100">
            <tr class="mh-100">
                <td class="w-25 h-100">
                    <div class="card shadow h-100" style="width: 18rem;">
                        <img src="{{ asset('images/Tienda/juguetes/juguete1.jpg') }}" class="card-img-top" alt="...">
                    </div>
                </td>
                <td>
                    <label for="mascota-nombre" style="font-weight:bold">Nombre</label>
                    <p id="mascota-nombre" name="nombre">Loki</p>
                </td>
                <td>
                    <label for="mascota-edad" style="font-weight:bold">Edad</label>
                    <p id="mascota-edad" name="edad">1</p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label for="mascota-especie" style="font-weight:bold">Especie</label>
                    <p id="mascota-especie" name="especie">Perro</p>
                </td>
                
                <td>
                    <label for="mascota-raza" style="font-weight:bold">Raza</label>
                    <p id="mascota-raza" name="raza">Mixto</p>
                </td>
                
            </tr>
            <tr>
                <td></td>
                <td>
                    <label for="mascota-dueno" style="font-weight:bold">Dueño</label>
                    <p id="mascota-dueno" name="dueno">Tiffany Cortez</p>
                </td>
                <td>
                    <label for="mascota-doctor" style="font-weight:bold">Doctor</label>
                    <p id="mascota-doctor" name="doctor">Gonzalo de La Orden</p>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection