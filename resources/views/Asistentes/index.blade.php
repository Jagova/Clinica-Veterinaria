@extends('layout')

@section('contenido')

<script>
$(document).on("click", ".abrirEliminaModal", function (event) {
    var asistenteNombre = $(this).data('nombre');
    var asistenteDoctor = $(this).data('asistente');
    var asistenteId = $(this).data('id');
    $("#eliminar-asistente-id").val(asistenteId);
    document.getElementById('eliminar-asistente-nombre').innerHTML = asistenteNombre;
    console.log(asistenteId);
    document.getElementById('form-eliminar').action = "asistentes/" + asistenteId;
});
</script>


<script>
    $(document).on("click", ".abrirEditaModal", function (event) {
        var asistenteNombre1 = $(this).data('nombre1');
        var asistenteNombre2 = $(this).data('nombre2');
        var asistenteApellido1 = $(this).data('apellido1');
        var asistenteApellido2 = $(this).data('apellido2');
        var asistenteEspecialidad1 = $(this).data('especialidad1');
        var asistenteEspecialidad2 = $(this).data('especialidad2');
        var asistenteClinica = $(this).data('clinica');
        var asistenteId = $(this).data('id');
        $("#editar-asistente-nombre1").val(asistenteNombre1);
        $("#editar-asistente-nombre2").val(asistenteNombre2);
        $("#editar-asistente-apellido1").val(asistenteApellido1);
        $("#editar-asistente-apellido2").val(asistenteApellido2);
        $("#editar-asistente-especialidad1").val(asistenteEspecialidad1);
        $("#editar-asistente-especialidad2").val(asistenteEspecialidad2);
        $("#editar-asistente-clinica").val(asistenteClinica);
        document.getElementById('form-editar').action = "asistentes/" + asistentesId;
    });
</script>


       
<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Asistentes <i class="fas fa-hospital"></i> </h1></div>
            <div class="row p-5">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Agregar asistente</button>
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Clinica</th>
                            <th>Doctor</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Asistentes as $asistente)
                        <tr>
                        <td>{{$asistente->id}}</td>
                        <td>{{$asistente->primer_nombre}} {{$asistente->apellido_paterno}}</td>   
                        <td>{{$asistente->clinica_id}}</td>
                        <td>{{$asistente->asistenteDoctor}}</td>
                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"
                                    data-id="{{$asistente->id}}"
                                    data-nombre1="{{$asistente->primer_nombre}}"
                                    data-nombre2="{{$asistente->segundo_nombre}}"
                                    data-apellido1="{{$asistente->apellido_paterno}}"
                                    data-apellido2="{{$asistente->apellido_materno}}"
                                    data-especialidad1="{{$asistente->especialidad_1}}"
                                    data-especialidad2="{{$asistente->especialidad_2}}"
                                    data-clinica="{{$asistente->clinica_id}}"
                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                data-toggle="modal" data-target="#eliminarModal"
                                data-id="{{$asistente->id}}"
                                data-nombre="{{$asistente->primer_nombre}}"
                                data-clinica="{{$asistente->clinica}}"
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
                            <h5 class="modal-title" id="agregarModalLabel">Agregar asistente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/asistentes" method="POST">
                            @csrf
                            @method('POST')
                        <div class="modal-body">                          
                                <div class="form-group row">
                                        <div class="col-6">
                                                <label for="in_atributo2">Primer nombre</label>
                                                <input type="text" class="form-control" id="nombre1" name="nombre1">        
                                        </div>
                                        <div class="col-6">
                                                <label for="in_atributo2">Segundo nombre</label>
                                                <input type="text" class="form-control" id="direccion" name="nombre2">        
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                            <label for="in_atributo2">Apellido Paterno</label>
                                            <input type="text" class="form-control" id="direccion" name="ApPaterno">        
                                    </div>
                                    <div class="col-6">
                                            <label for="in_atributo2">Apellido Materno</label>
                                            <input type="text" class="form-control" id="direccion" name="ApMaterno">        
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col-6">
                                                <label for="in_atributo2">Especialidad 1</label>
                                                <input type="text" class="form-control" id="direccion" name="esp1">        
                                        </div>
                                        <div class="col-6">
                                                <label for="in_atributo2">Especialidad 2</label>
                                                <input type="text" class="form-control" id="direccion" name="esp2">        
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="in_atributo1">Clinica</label>
                                        <select class="form-control" name="clinica">
                                            @foreach ($Clinicas as $clinica)                                  
                                                <option value="{{$clinica->id}}">{{$clinica->nombre}}</option>
                                            @endforeach
                                        </select>
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
                                <div class="form-group row">
                                        <div class="col-6">
                                                <label for="editar-asistente-nombre1">Primer nombre</label>
                                                <input type="text" class="form-control" id="editar-asistente-nombre1" name="nombre1">        
                                        </div>
                                        <div class="col-6">
                                                <label for="editar-asistente-nombre2">Segundo nombre</label>
                                                <input type="text" class="form-control" id="editar-asistente-nombre2" name="nombre2">        
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                            <label for="editar-asistente-apellido1">Apellido Paterno</label>
                                            <input type="text" class="form-control" id="editar-asistente-apellido1" name="ApPaterno">        
                                    </div>
                                    <div class="col-6">
                                            <label for="editar-asistente-apellido2">Apellido Materno</label>
                                            <input type="text" class="form-control" id="editar-asistente-apellido2" name="ApMaterno">        
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col-6">
                                                <label for="editar-asistente-especialidad1">Especialidad 1</label>
                                                <input type="text" class="form-control" id="editar-asistente-especialidad1" name="esp1">        
                                        </div>
                                        <div class="col-6">
                                                <label for="editar-asistente-especialidad2">Especialidad 2</label>
                                                <input type="text" class="form-control" id="editar-asistente-especialidad2" name="esp2">        
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="editar-asistente-clinica">Clínica</label>
                                        <select class="form-control" name="clinica" id="editar-asistente-clinica">
                                        @foreach ($Clinicas as $clinica)                                  
                                                <option value="{{$clinica->id}}">{{$clinica->nombre}}</option>
                                            @endforeach
                                        </select>
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
                                <h5 class="modal-title" id="eliminarModalLabel">Eliminar asistente</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-eliminar" method="POST">
                                    @csrf
                                    @method('DELETE')
                            <div class="modal-body">
                                ¿Estás seguro de eliminar el asistente <span id="eliminar-asistente-nombre"></span>? 
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