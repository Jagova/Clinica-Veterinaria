        
@extends('layout')

@section('contenido')

<script>
$(document).on("click", ".abrirEliminaModal", function (event) {
    var clinicaNombre = $(this).data('nombre');
    var clinicaId = $(this).data('id');
    $("#eliminar-clinica-id").val(clinicaId);
    document.getElementById('eliminar-clinica-nombre').innerHTML = clinicaNombre;
    document.getElementById('form-eliminar').action = "clinicas/" + clinicaId;
});
</script>

<!--Script para editar un modal-->
<script>
    $(document).on("click", ".abrirEditaModal", function (event) {
        var clinicaNombre = $(this).data('nombre');
        var clinicaId = $(this).data('id');
        var clinicaDireccion = $(this).data('direccion');
        document.getElementById('editarmo-clinica-nombre').innerHTML = clinicaNombre;
        $("#editar-clinica-nombre").val(clinicaNombre);
        $("#editar-clinica-direccion").val(clinicaDireccion);
        document.getElementById('form-editar').action = "clinicas/" + clinicaId;
    });
    </script>

<!--Script para abrir el modal consultar-->
<script>
    $(document).on("click", ".abrirConsultaModal", function (event) {
        var clinicaNombre = $(this).data('nombre');
        var clinicaId = $(this).data('id');
        var clinicaDireccion = $(this).data('direccion');
        document.getElementById("consultar-clinica-nombre").innerHTML = clinicaNombre;
        document.getElementById("consultar-clinica-direccion").innerHTML = clinicaDireccion;
    });
</script>

       
<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Cli­nicas <i class="fas fa-hospital"></i> </h1></div>
            <div class="row p-5">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Crear cli­nica</button>
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th >Id</th>
                            <th >Nombre</th>
                            <th >Direccion</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Clinicas as $clinica)
                        <tr>
                        <td>{{$clinica->id}}</td>
                        <td>{{$clinica->nombre}}</td>   
                        <td>{{$clinica->direccion}}</td>
                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"
                                    data-id="{{$clinica->id}}"
                                    data-nombre="{{$clinica->nombre}}"
                                    data-direccion="{{$clinica->direccion}}"
                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                data-toggle="modal" data-target="#eliminarModal"
                                data-id="{{$clinica->id}}"
                                data-nombre="{{$clinica->nombre}}"
                                data-direccion="{{$clinica->direccion}}"
                                >Eliminar <i class="fas fa-trash-alt"></i> </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>           
                </table>
            </div>

            
            <!-- Modal Agregar -->
            <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="agregarModalLabel">Agregar clínica</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/clinicas" method="POST">
                            @csrf
                            @method('POST')
                        <div class="modal-body">                          
                                <div class="form-group">
                                    <label for="in_atributo1">Nombre</label>
                                        <input type="text" required class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="in_atributo2">Dirección</label>
                                    <input type="text" required class="form-control" id="direccion" name="direccion">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" required class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            <!-- Modal Consultar -->
            <div class="modal fade" id="consultarModal" tabindex="-1" role="dialog" aria-labelledby="consultarModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">  
                            <table class="table"> 
                                <tr>
                                    <div class="form-group">
                                        <label for="consultar-clinica-nombre" style="font-weight:bold">Nombre</label>
                                            <p id="consultar-clinica-nombre" name="nombre"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="consultar-clinica-direccion" style="font-weight:bold">Dirección</label>
                                        <p id="consultar-clinica-direccion" name="direccion"></p>
                                    </div>
                                </tr>
                                
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
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
                                <h5 class="modal-title" id="editarModalLabel">Editar <span id="editarmo-clinica-nombre"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-editar" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="editar-clinica-nombre">Nombre</label>
                                            <input type="text" required class="form-control" id="editar-clinica-nombre" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="editar-clinica-direccion">Dirección</label>
                                        <input type="text" required class="form-control" id="editar-clinica-direccion" name="direccion">
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
                                <h5 class="modal-title" id="eliminarModalLabel">Eliminar clínica</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-eliminar" method="POST">
                                    @csrf
                                    @method('DELETE')
                            <div class="modal-body">
                                ¿Estás seguro de eliminar la clínica <span id="eliminar-clinica-nombre"></span>? 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Eliminar</button>
                            </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>

@endsection