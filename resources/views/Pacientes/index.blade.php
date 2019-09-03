@extends('layout')

@section('contenido')
       
<!--Script para eliminar un paciente-->
<script>
        $(document).on("click", ".abrirEliminaModal", function (event) {
            var pacienteNombre = $(this).data('nombre');
            var pacienteId = $(this).data('id');
            $("#eliminar-paciente-id").val(pacienteId);
            document.getElementById('eliminar-paciente-nombre').innerHTML = pacienteNombre;
            document.getElementById('form-eliminar').action = "pacientes/" + pacienteId;
        });
</script>

<!--Script para editar un paciente-->
<script>
        $(document).on("click", ".abrirEditaModal", function (event) {
            var pacienteId = $(this).data('id');
            var pacienteNombre = $(this).data('nombre');
            var pacienteEdad = $(this).data('edad');
            var pacienteEspecie = $(this).data('especie');
            var pacienteRaza = $(this).data('raza');
            var pacienteDuenioId = $(this).data('duenioid');
            var pacienteDoctorId = $(this).data('doctorid');
            console.log(pacienteDoctorId);
            $("#editar-paciente-nombre").val(pacienteNombre);
            $("#editar-paciente-edad").val(pacienteEdad);
            $("#editar-paciente-especie").val(pacienteEspecie);
            $("#editar-paciente-raza").val(pacienteRaza);
            $("#editar-paciente-duenio-id").val(pacienteDuenioId);
            $("#editar-paciente-doctor-id").val(pacienteDoctorId);
            document.getElementById('form-editar').action = "pacientes/" + pacienteId;
        });
</script>

<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Pacientes <i class="fas fa-hospital"></i> </h1></div>
            <div class="row p-5">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i>Agregar Paciente</button>
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th >Id</th>
                            <th >Nombre</th>
                            <th >Edad</th>
                            <th >Especie</th>
                            <th >Raza</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Pacientes as $paciente)
                        <tr>
                        <td>{{$paciente->id}}</td>
                        <td>{{$paciente->nombre}}</td>
                        <td>{{$paciente->edad}}</td>
                        <td>{{$paciente->especie}}</td>
                        <td>{{$paciente->raza}}</td>

                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"
                                    data-id="{{$paciente->id}}"
                                    data-nombre="{{$paciente->nombre}}"
                                    data-edad = "{{$paciente->edad}}"
                                    data-especie = "{{$paciente->especie}}"
                                    data-raza = "{{$paciente->raza}}"
                                    data-duenioid="{{$paciente->duenio_id}}"
                                    data-doctorid = "{{$paciente->doctor_id}}"
                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                    data-toggle="modal" data-target="#eliminarModal"
                                    data-id="{{$paciente->id}}"
                                    data-nombre="{{$paciente->nombre}}"
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
                            <h5 class="modal-title" id="agregarModalLabel">Nuevo paciente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/pacientes" method="POST">
                            @csrf
                            @method('POST')
                        <div class="modal-body">                          
                                <div class="form-group">
                                    <div class = "row">
                                        <div class = "col-6" >
                                            <label for="in_atributo1">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre">
                                        </div>
                                        <div class = "col-6" >
                                            <label for="in_atributo2">Edad</label>
                                            <input type="text" class="form-control" id="edad" name="edad">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class = "row">
                                            <div class = "col-6" >
                                                <label for="in_atributo3">Especie</label>
                                                <input type="text" class="form-control" id="especie" name="especie">
                                            </div>
                                            <div class = "col-6" >
                                                <label for="in_atributo4">Raza</label>
                                                <input type="text" class="form-control" id="raza" name="raza">
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label for="in_atributo6">Dueño</label>
                                    <input type="text" class="form-control" id="duenio_id" name="duenio_id">
                                </div>
                                <div class="form-group">
                                    <label for="in_atributo7">Doctor favorito</label>
                                    <select class="form-control" name="doctor_id">
                                            @foreach ($Doctores as $doctor)                                  
                                                <option value="{{$doctor->id}}">{{$doctor->primer_nombre}}</option>
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
                                        <div class="form-group">
                                            <div class = "row">
                                                <div class = "col-6" >
                                                    <label for="in_atributo1">Nombre</label>
                                                    <input type="text" class="form-control" id="editar-paciente-nombre" name="nombre">
                                                </div>
                                                <div class = "col-6" >
                                                    <label for="in_atributo2">Edad</label>
                                                    <input type="text" class="form-control" id="editar-paciente-edad" name="edad">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class = "row">
                                                    <div class = "col-6" >
                                                        <label for="in_atributo3">Especie</label>
                                                        <input type="text" class="form-control" id="editar-paciente-especie" name="especie">
                                                    </div>
                                                    <div class = "col-6" >
                                                        <label for="in_atributo4">Raza</label>
                                                        <input type="text" class="form-control" id="editar-paciente-raza" name="raza">
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                            <label for="in_atributo6">Dueño</label>
                                            <input type="text" class="form-control" id="editar-paciente-duenio-id" name="duenio_id">
                                        </div>
                                        <div class="form-group">
                                            <label for="in_atributo7">Doctor favorito</label>
                                            <select class="form-control" id="editar-paciente-doctor-id" name="doctor_id">
                                                    @foreach ($Doctores as $doctor)                                  
                                                        <option value="{{$doctor->id}}">{{$doctor->primer_nombre}}</option>
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
                                <h5 class="modal-title" id="eliminarModalLabel">Eliminar paciente</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-eliminar" method="POST">
                                    @csrf
                                    @method('DELETE')
                            <div class="modal-body">
                                ¿Estás seguro de eliminar el paciente <span id="eliminar-paciente-nombre"></span>? 
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