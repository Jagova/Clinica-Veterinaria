        
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
        $("#consultar-dueno-nombre").val(duenoNombre);
        $("#consultar-dueno-apellido_paterno").val(duenoApPaterno);
        $("#consultar-dueno-apellido_materno").val(duenoApMaterno);
        $("#consultar-dueno-telefono").val(duenoTelefono);
        $("#consultar-dueno-direccion").val(duenoDireccion);
        $("#consultar-dueno-celular").val(duenoCelular);
        $("#consultar-dueno-correo").val(duenoCorreo);
        $("#consultar-dueno-rfc").val(duenoRFC);
        $("#consultar-dueno-codigo_postal").val(duenoCP);
        $("#consultar-dueno-razon_social").val(duenoRazonSocial);
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
        <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Crear dueno</button>
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


            <!-- Modal Consultar -->
            <div class="modal fade" id="consultarModal" tabindex="-1" role="dialog" aria-labelledby="consultarModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="consultarModalLabel">Consultar dueño</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/duenos" method="POST">
                            @csrf
                            @method('POST')
                        <div class="modal-body">  
                            <div class="form-group row">
                                <div class="col-6">                        
                                    <label for="in_atributo1" style="font-weight:bold" >Nombre</label>
                                    <p id="nombre" name="nombre">{{$dueno->nombre}}</p>
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo1" style="font-weight:bold" >Apellido Paterno</label>
                                    <p id="apellido_paterno" name="apellido_paterno">{{$dueno->apellido_paterno}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="in_atributo1" style="font-weight:bold" >Apellido Materno</label>
                                    <p id="apellido_materno" name="apellido_materno">{{$dueno->apellido_materno}}</p>
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo1" style="font-weight:bold" >Teléfono</label>
                                    <p id="telefono" name="telefono">{{$dueno->telefono}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="in_atributo2" style="font-weight:bold" >Dirección</label>
                                    <p id="direccion" name="direccion">{{$dueno->direccion}}</p>
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo1" style="font-weight:bold" >Celular</label>
                                    <p id="celular" name="celular">{{$dueno->celular}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="in_atributo1" style="font-weight:bold" >Correo</label>
                                    <p id="correo" name="correo">{{$dueno->correo}}</p>
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo1" style="font-weight:bold" >RFC</label>
                                    <p id="rfc" name="rfc" style="text-transform: uppercase">{{$dueno->rfc}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="in_atributo1" style="font-weight:bold" >Código Postal</label>
                                    <p id="codigp_postal" name="codigo_postal">{{$dueno->codigo_postal}}</p>
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo1" style="font-weight:bold" >Razón Social</label>
                                    <p id="razon_social" name="razon_social">{{$dueno->razon_social}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            
            <!-- Modal Agregar -->
            <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="agregarModalLabel">Crear dueno</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/duenos" method="POST">
                            @csrf
                            @method('POST')
                        <div class="modal-body">                          
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="in_atributo1">Nombre</label>
                                        <input type="text" required class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo1">Apellido Paterno</label>
                                        <input type="text" required class="form-control" id="apellido_paterno" name="apellido_paterno">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="in_atributo1">Apellido Materno</label>
                                        <input type="text" required class="form-control" id="apellido_materno" name="apellido_materno">
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo1">Teléfono</label>
                                        <input type="number" maxlength="10" required class="form-control" id="telefono" name="telefono">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="in_atributo2">Dirección</label>
                                    <input type="text" required class="form-control" id="direccion" name="direccion">
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo1">Celular</label>
                                        <input type="number" maxlength="10" required class="form-control" id="celular" name="celular">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="in_atributo1">Correo</label>
                                        <input type="email" maxlength="100" required class="form-control" id="correo" name="correo">
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo1">RFC</label>
                                        <input type="text" maxlength="13" required class="form-control" id="rfc" name="rfc" style="text-transform: uppercase">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="in_atributo1">Código Postal</label>
                                        <input type="number" maxlength="5" required class="form-control" id="codigp_postal" name="codigo_postal">
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo1">Razón Social</label>
                                        <input type="text" required class="form-control" id="razon_social" name="razon_social">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            <!-- Modal editar -->
            <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editarModalLabel">Editar elemento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-editar" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="editar-dueno-nombre">Nombre</label>
                                            <input type="text" class="form-control" id="editar-dueno-nombre" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="editar-dueno-apellido_paterno">Apellido Paterno</label>
                                            <input type="text" required class="form-control" id="editar-dueno-apellido_paterno" name="apellido_paterno">
                                    </div>
                                    <div class="form-group">
                                        <label for="editar-dueno-apellido_materno">Apellido Materno</label>
                                            <input type="text" required class="form-control" id="editar-dueno-apellido_materno" name="apellido_materno">
                                    </div>
                                    <div class="form-group">
                                        <label for="editar-dueno-telefono">Teléfono</label>
                                            <input type="number" maxlength="10" required class="form-control" id="editar-dueno-telefono" name="telefono">
                                    </div>
                                    <div class="form-group">
                                        <label for="editar-dueno-direccion">Dirección</label>
                                        <input type="text" required class="form-control" id="editar-dueno-direccion" name="direccion">
                                    </div>
                                    <div class="form-group">
                                        <label for="editar-dueno-celular">Celular</label>
                                            <input type="number" maxlength="10" class="form-control" id="editar-dueno-celular" name="celular">
                                    </div>
                                    <div class="form-group">
                                        <label for="editar-dueno-correo">Correo</label>
                                            <input type="email" required class="form-control" id="editar-dueno-correo" name="correo">
                                    </div>
                                    <div class="form-group">
                                        <label for="editar-dueno-rfc">RFC</label>
                                            <input type="text" maxlength="13" class="form-control" id="editar-dueno-rfc" name="rfc">
                                    </div>
                                    <div class="form-group">
                                    <label for="in_atributo1">Código Postal</label>
                                        <input type="number" maxlength="5" required class="form-control" id="editar-dueno-codigo_postal" name="codigo_postal">
                                </div>
                                    <div class="form-group">
                                        <label for="editar-dueno-razon_social">Razón Social</label>
                                            <input type="text" class="form-control" id="editar-dueno-razon_social" name="razon_social">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
            <!-- Modal Eliminar -->
            <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="eliminarModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="eliminarModalLabel">Eliminar dueno</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-eliminar" method="POST">
                                    @csrf
                                    @method('DELETE')
                            <div class="modal-body">
                                ¿Estás seguro de eliminar al dueño <span id="eliminar-dueno-nombre">{{$dueno->nombre}} {{$dueno->apellido_paterno}}</span>? 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Eliminar</button>
                            </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>

@endsection