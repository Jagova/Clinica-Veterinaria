@extends('layout')

@section('contenido')

<script>
/*$(document).on("click", ".abrirEliminaModal", function (event) {
    var doctorNombre = $(this).data('nombre');
    var doctorClinica = $(this).data('clinica');
    var doctorId = $(this).data('id');
    $("#eliminar-doctor-id").val(doctorId);
    document.getElementById('eliminar-doctor-nombre').innerHTML = doctorNombre;
    console.log(doctorId);
    document.getElementById('form-eliminar').action = "doctores/" + doctorId;
});*/
</script>


<script>
   /* $(document).on("click", ".abrirEditaModal", function (event) {
        var doctorNombre1 = $(this).data('nombre1');
        var doctorNombre2 = $(this).data('nombre2');
        var doctorApellido1 = $(this).data('apellido1');
        var doctorApellido2 = $(this).data('apellido2');
        var doctorEspecialidad1 = $(this).data('especialidad1');
        var doctorEspecialidad2 = $(this).data('especialidad2');
        var doctorClinica = $(this).data('clinica');
        var doctorId = $(this).data('id');
        $("#editar-doctor-nombre1").val(doctorNombre1);
        $("#editar-doctor-nombre2").val(doctorNombre2);
        $("#editar-doctor-apellido1").val(doctorApellido1);
        $("#editar-doctor-apellido2").val(doctorApellido2);
        $("#editar-doctor-especialidad1").val(doctorEspecialidad1);
        $("#editar-doctor-especialidad2").val(doctorEspecialidad2);
        $("#editar-doctor-clinica").val(doctorClinica);
        document.getElementById('form-editar').action = "doctores/" + doctorId;
    });*/
</script>


       
<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Servicios <i class="fas fa-heartbeat"></i> </h1></div>
            <div class="row p-5">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Agregar servicio</button>
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
                                                <label for="editar-doctor-nombre1">Primer nombre</label>
                                                <input type="text" class="form-control" id="editar-doctor-nombre1" name="nombre1">        
                                        </div>
                                        <div class="col-6">
                                                <label for="editar-doctor-nombre2">Segundo nombre</label>
                                                <input type="text" class="form-control" id="editar-doctor-nombre2" name="nombre2">        
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                            <label for="editar-doctor-apellido1">Apellido Paterno</label>
                                            <input type="text" class="form-control" id="editar-doctor-apellido1" name="ApPaterno">        
                                    </div>
                                    <div class="col-6">
                                            <label for="editar-doctor-apellido2">Apellido Materno</label>
                                            <input type="text" class="form-control" id="editar-doctor-apellido2" name="ApMaterno">        
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col-6">
                                                <label for="editar-doctor-especialidad1">Especialidad 1</label>
                                                <input type="text" class="form-control" id="editar-doctor-especialidad1" name="esp1">        
                                        </div>
                                        <div class="col-6">
                                                <label for="editar-doctor-especialidad2">Especialidad 2</label>
                                                <input type="text" class="form-control" id="editar-doctor-especialidad2" name="esp2">        
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="editar-doctor-clinica">Clínica</label>
                                        <select class="form-control" name="clinica" id="editar-doctor-clinica">
                                        
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
                                ¿Estás seguro de eliminar el doctor <span id="eliminar-doctor-nombre"></span>? 
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