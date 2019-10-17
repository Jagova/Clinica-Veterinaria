@extends('layout')

@section('contenido')

<script>
    $(document).on("click", ".abrirEliminaModal", function (event) {
        var doctorNombre = $(this).data('nombre');
        var doctorClinica = $(this).data('clinica');
        var doctorId = $(this).data('id');
        $("#eliminar-doctor-id").val(doctorId);
        document.getElementById('eliminar-doctor-nombre').innerHTML = doctorNombre;
        console.log(doctorId);
        document.getElementById('form-eliminar').action = "doctores/" + doctorId;
    });
</script>


<script>
    $(document).on("click", ".abrirEditaModal", function (event) {
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
    });
</script>

<!--Script para abrir el modal consultar-->
<script>
    $(document).on("click", ".abrirConsultaModal", function (event) {
        var doctorNombre1 = $(this).data('nombre1');
        var doctorNombre2 = $(this).data('nombre2');
        var doctorApellido1 = $(this).data('apellido1');
        var doctorApellido2 = $(this).data('apellido2');
        var doctorEspecialidad1 = $(this).data('especialidad1');
        var doctorEspecialidad2 = $(this).data('especialidad2');
        var doctorClinica = $(this).data('clinica');
        var doctorId = $(this).data('id');
        document.getElementById("consultar-doctor-nombre1").innerHTML = doctorNombre1;
        document.getElementById("consultar-doctor-nombre2").innerHTML = doctorNombre2;
        document.getElementById("consultar-doctor-apellido1").innerHTML = doctorApellido1;
        document.getElementById("consultar-doctor-apellido2").innerHTML = doctorApellido2;
        document.getElementById("consultar-doctor-especialidad1").innerHTML = doctorEspecialidad1;
        document.getElementById("consultar-doctor-especialidad2").innerHTML = doctorEspecialidad2;
        document.getElementById("consultar-doctor-clinica").innerHTML = doctorClinica;
    });
</script>


       
<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Doctores <i class="fas fa-stethoscope"></i> </h1></div>
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
                        <td>
                            <button class="btn btn-primary abrirConsultaModal" type="button" data-target="#consultarModal" 
                            data-toggle="modal"
                            data-id="{{$doctor->id}}"
                            data-nombre1="{{$doctor->primer_nombre}}"
                            data-nombre2="{{$doctor->segundo_nombre}}"
                            data-apellido1="{{$doctor->apellido_paterno}}"
                            data-apellido2="{{$doctor->apellido_materno}}"
                                    data-especialidad1="{{$doctor->especialidad_1}}"
                                    data-especialidad2="{{$doctor->especialidad_2}}"
                                    data-clinica="{{$doctor->clinica_id->nombre}}"
                            >
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </td>
                        <td>{{$doctor->id}}</td>
                        <td>{{$doctor->primer_nombre}} {{$doctor->apellido_paterno}}</td>   
                        <td>{{$doctor->Clinica->nombre}}</td>
                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"
                                    data-id="{{$doctor->id}}"
                                    data-nombre1="{{$doctor->primer_nombre}}"
                                    data-nombre2="{{$doctor->segundo_nombre}}"
                                    data-apellido1="{{$doctor->apellido_paterno}}"
                                    data-apellido2="{{$doctor->apellido_materno}}"
                                    data-especialidad1="{       {$doctor->especialidad_1}}"
                                    data-especialidad2="{{$doctor->especialidad_2}}"
                                    data-clinica="{{$doctor->clinica_id}}"
                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                data-toggle="modal" data-target="#eliminarModal"
                                data-id="{{$doctor->id}}"
                                data-nombre="{{$doctor->primer_nombre}}"
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
                                                <input type="text" required class="form-control" id="nombre1" name="nombre1">        
                                        </div>
                                        <div class="col-6">
                                                <label for="in_atributo2">Segundo nombre</label>
                                                <input type="text" required class="form-control" id="direccion" name="nombre2">        
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                            <label for="in_atributo2">Apellido Paterno</label>
                                            <input type="text" required class="form-control" id="direccion" name="ApPaterno">        
                                    </div>
                                    <div class="col-6">
                                            <label for="in_atributo2">Apellido Materno</label>
                                            <input type="text" required class="form-control" id="direccion" name="ApMaterno">        
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col-6">
                                                <label for="in_atributo2">Especialidad 1</label>
                                                <input type="text" required class="form-control" id="direccion" name="esp1">        
                                        </div>
                                        <div class="col-6">
                                                <label for="in_atributo2">Especialidad 2</label>
                                                <input type="text" required class="form-control" id="direccion" name="esp2">        
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

            <!-- Modal Consultar -->
            <div class="modal fade" id="consultarModal" tabindex="-1" role="dialog" aria-labelledby="consultarModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="consultarModalLabel">Consultar doctor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">  
                            <table class="table"> 
                                <tr>
                                    <td class="form-group">
                                            <label for="consultar-doctor-nombre1" style="font-weight:bold">Primer nombre</label>
                                            <p id="consultar-doctor-nombre1" name="nombre1"></p>      
                                    </td>
                                    <td class="form-group">
                                            <label for="consultar-doctor-nombre2" style="font-weight:bold">Segundo nombre</label>
                                            <td id="consultar-doctor-nombre2" name="nombre2"></p>       
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group">
                                            <label for="consultar-doctor-apellido1" style="font-weight:bold">Apellido Paterno</label>
                                            <p id="consultar-doctor-apellido1" name="ApPaterno"></p>      
                                    </td>
                                    <td class="form-group">
                                            <label for="consultar-doctor-apellido2" style="font-weight:bold">Apellido Materno</label>
                                            <p id="consultar-doctor-apellido2" name="ApMaterno"></p>      
                                    </td>
                                </tr>
                                <tr>
                                        <td class="form-group">
                                                <label for="consultar-doctor-especialidad1" style="font-weight:bold">Especialidad 1</label>
                                                <p id="consultar-doctor-especialidad1" name="esp1"></p>       
                                        </td>
                                        <td class="form-group">
                                                <label for="consultar-doctor-especialidad2" style="font-weight:bold">Especialidad 2</label>
                                                <p id="consultar-doctor-especialidad2" name="esp2"></p>        
                                        </td>
                                </tr>
                                <tr>
                                        <label for="consultar-doctor-clinica" style="font-weight:bold">Clínica</label>
                                        <p name="clinica" id="consultar-doctor-clinica"></p>
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
                                                <input type="text" required class="form-control" id="editar-doctor-nombre1" name="nombre1">        
                                        </div>
                                        <div class="col-6">
                                                <label for="editar-doctor-nombre2">Segundo nombre</label>
                                                <input type="text" required class="form-control" id="editar-doctor-nombre2" name="nombre2">        
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                            <label for="editar-doctor-apellido1">Apellido Paterno</label>
                                            <input type="text" required class="form-control" id="editar-doctor-apellido1" name="ApPaterno">        
                                    </div>
                                    <div class="col-6">
                                            <label for="editar-doctor-apellido2">Apellido Materno</label>
                                            <input type="text" required class="form-control" id="editar-doctor-apellido2" name="ApMaterno">        
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col-6">
                                                <label for="editar-doctor-especialidad1">Especialidad 1</label>
                                                <input type="text" required class="form-control" id="editar-doctor-especialidad1" name="esp1">        
                                        </div>
                                        <div class="col-6">
                                                <label for="editar-doctor-especialidad2">Especialidad 2</label>
                                                <input type="text" required class="form-control" id="editar-doctor-especialidad2" name="esp2">        
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="editar-doctor-clinica">Clínica</label>
                                        <select class="form-control" name="clinica" id="editar-doctor-clinica">
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