        
@extends('layout')

@section('contenido')

<script>
$(document).on("click", ".abrirEliminaModal", function (event) {
    var duenoNombre = $(this).data('nombre');
    var duenoId = $(this).data('id');
    $("#eliminar-dueno-id").val(duenoId);
    document.getElementById('eliminar-dueno-nombre').innerHTML = duenoNombre;
    document.getElementById('form-eliminar').action = "duenos/" + duenoId;
});
</script>

<!--Script para abrir el modal editar contraseña-->
<script>
    $(document).on("click", ".abrirEditaContraseñaModal", function (event) {

        var doctorId = $(this).data('id');
        //document.getElementById('editarmo-doctor-nombre1').innerHTML = nombreCompleto;
        console.log(doctorId);
        document.getElementById('form-editar-contraseña').action = "duenoseditapass/" + doctorId;

    });
</script>

<!--Script para editar un modal-->
<script>
    $(document).on("click", ".abrirEditaModal", function (event) {
        var duenoNombre = $(this).data('nombre');
        var duenoId = $(this).data('id'); 
        var duenoApPaterno = $(this).data('apellido_paterno');
        var duenoApMaterno = $(this).data('apellido_materno');
        var duenoTelefono = $(this).data('telefono');
        var duenoDireccion = $(this).data('direccion');
        var duenoCelular = $(this).data('celular');
        var duenoCorreo = $(this).data('correo');
        var duenoRFC = $(this).data('rfc');
        var duenoCP = $(this).data('codigo_postal');
        var duenoRazonSocial = $(this).data('razon_social');
        $("#editar-dueno-nombre").val(duenoNombre);
        $("#editar-dueno-apellido_paterno").val(duenoApPaterno);
        $("#editar-dueno-apellido_materno").val(duenoApMaterno);
        $("#editar-dueno-telefono").val(duenoTelefono);
        $("#editar-dueno-direccion").val(duenoDireccion);
        $("#editar-dueno-celular").val(duenoCelular);
        $("#editar-dueno-correo").val(duenoCorreo);
        $("#editar-dueno-rfc").val(duenoRFC);
        $("#editar-dueno-codigo_postal").val(duenoCP);
        $("#editar-dueno-razon_social").val(duenoRazonSocial);
        document.getElementById('form-editar').action = "duenos/" + duenoId;
        console.log("duenos/" + duenoId);
    });
</script>

<!--Script para abrir el modal consultar-->
<script>
    $(document).on("click", ".abrirConsultaModal", function (event) {
        var duenoNombre = $(this).data('nombre');
        var duenoId = $(this).data('id');
        var duenoApPaterno = $(this).data('apellido_paterno');
        var duenoApMaterno = $(this).data('apellido_materno');
        var duenoTelefono = $(this).data('telefono');
        var duenoDireccion = $(this).data('direccion');
        var duenoCelular = $(this).data('celular');
        var duenoCorreo = $(this).data('correo');
        var duenoRFC = $(this).data('rfc');
        var duenoCP = $(this).data('codigo_postal');
        var duenoRazonSocial = $(this).data('razon_social');
        document.getElementById("consultar-dueno-nombre").innerHTML = duenoNombre;
        document.getElementById("consultar-dueno-apellido_paterno").innerHTML = duenoApPaterno;
        document.getElementById("consultar-dueno-apellido_materno").innerHTML = duenoApMaterno;
        document.getElementById("consultar-dueno-telefono").innerHTML = duenoTelefono;
        document.getElementById("consultar-dueno-direccion").innerHTML = duenoDireccion;
        document.getElementById("consultar-dueno-celular").innerHTML = duenoCelular;
        document.getElementById("consultar-dueno-correo").innerHTML = duenoCorreo;
        document.getElementById("consultar-dueno-rfc").innerHTML = duenoRFC;
        document.getElementById("consultar-dueno-codigo_postal").innerHTML = duenoCP;
        document.getElementById("consultar-dueno-razon_social").innerHTML = duenoRazonSocial;
    });
</script>

       


<div class="container-fluid">

<!--Muestra los errores-->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row p-5"><h1 class="display-1">Dueños <i class="fas fa-users icon-orange"></i> </h1></div>
          
    <!--Consultar-->
    <div class="row p-5">
        <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Crear dueño</button>
        <table class="table" id="table1">
            <thead>
                <tr>
                    <th></th>
                    <th >Id</th>
                    <th >Nombre</th>
                    <th >Direccion</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Duenos as $dueno)
                    <tr>
                        <td>
                                <div>
                            <button class="btn btn-primary abrirConsultaModal" type="button" data-target="#consultarModal" 
                            data-toggle="modal"
                            data-id="{{$dueno->id}}"
                            data-nombre="{{$dueno->nombre}}"
                            data-apellido_paterno="{{$dueno->apellido_paterno}}"
                            data-apellido_materno="{{$dueno->apellido_materno}}"
                            data-telefono="{{$dueno->telefono}}"
                            data-direccion="{{$dueno->direccion}}"
                            data-celular="{{$dueno->celular}}"
                            data-correo="{{$dueno->correo}}"
                            data-rfc="{{$dueno->rfc}}"
                            data-codigo_postal="{{$dueno->codigo_postal}}"
                            data-razon_social="{{$dueno->razon_social}}"
                            >
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </td>
      
                        <td>{{$dueno->id}}</td>
                        <td>{{$dueno->nombre}} {{$dueno->apellido_paterno}} {{$dueno->apellido_materno}}</td>   
                        <td>{{$dueno->direccion}}</td>
                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"
                                    data-id="{{$dueno->id}}"
                                    data-nombre="{{$dueno->nombre}}"
                                    data-apellido_paterno="{{$dueno->apellido_paterno}}"
                                    data-apellido_materno="{{$dueno->apellido_materno}}"
                                    data-telefono="{{$dueno->telefono}}"
                                    data-direccion="{{$dueno->direccion}}"
                                    data-celular="{{$dueno->celular}}"
                                    data-correo="{{$dueno->correo}}"
                                    data-rfc="{{$dueno->rfc}}"
                                    data-codigo_postal="{{$dueno->codigo_postal}}"
                                    data-razon_social="{{$dueno->razon_social}}"
                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-primary mx-2 abrirEditaContraseñaModal" data-toggle="modal" 
                                    data-target="#editarContraseñaModal"
                                    data-id="{{$dueno->id}}"
                                    >Modificar Contraseña <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                    data-toggle="modal" data-target="#eliminarModal"
                                    data-id="{{$dueno->id}}"
                                    data-nombre="{{$dueno->nombre}}"
                                    data-apellido_paterno="{{$dueno->apellido_paterno}}"
                                    >Eliminar <i class="fas fa-trash-alt"></i> </button>
                                    </div>
                            </td>
                        </tr>
                        
                        @endforeach
                        </tbody>           
                </table>
            </div>

            @include('Duenos.modalAgregarDueno')
            @include('Duenos.modalConsultarDueno')
            @include('Duenos.modalEliminarDueno')
        @include('Duenos.modalEditarDueno')
        @include('Duenos.modalEditarContraseña')
      
      
        
        

@endsection