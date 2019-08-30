@extends('layout')

@section('contenido')

<script>
$(document).on("click", ".abrirEliminaModal", function (event) {
    var doctorNombre = $(this).data('nombre ');
    var doctorClinica = $(this).data('clinica_id');
    var doctorId = $(this).data('id');
    $("#eliminar-doctor-id").val(doctorId);
    document.getElementById('eliminar-doctor-nombre').innerHTML = doctorNombre;
    document.getElementById('form-eliminar').action = "doctores/" + doctorId;
});
</script>


<script>
    $(document).on("click", ".abrirEditaModal", function (event) {
        var doctorNombre = $(this).data('nombre1');
        var doctorClinica = $(this).data('clinica_id');
        var doctorId = $(this).data('id');
        $("#editar-doctor-nombre").val(doctorNombre);
        $("#editar-doctor-clinica").val(doctorClinica);
        document.getElementById('form-editar').action = "doctores/" + doctorId;
    });
</script>


       
<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Doctores <i class="fas fa-hospital"></i> </h1></div>
            <div class="row p-5">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Agregar doctor</button>
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Clinica</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Doctores as $doctor)
                        <tr>
                        <td>{{$doctor->id}}</td>
                        <td>{{$doctor->primer_nombre}} {{$doctor->apellido_paterno}}</td>   
                        <td>{{$doctor->clinica_id}}</td>
                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"
                                    data-id="{{$doctor->id}}"
                                    data-nombre="{{$doctor->nombre1}}"
                                    data-clinica="{{$doctor->clinica_id}}"
                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                data-toggle="modal" data-target="#eliminarModal"
                                data-id="{{$doctor->id}}"
                                data-nombre="{{$doctor->nombre1}}"
                                data-clinica="{{$doctor->clinica}}"
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
                            <h5 class="modal-title" id="agregarModalLabel">Agregar doctor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/doctores" method="POST">
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
                                        <label for="in_atributo1">Doctor</label>
                                        <select class="form-control" name="doctor">
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
                                <h5 class="modal-title" id="eliminarModalLabel">Eliminar doctor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-eliminar" method="POST">
                                    @csrf
                                    @method('DELETE')
                            <div class="modal-body">
                                ¿Estás seguro de eliminar el doctor<span id="eliminar-doctor-nombre"></span>? 
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