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
            console.log(pacienteEspecie);

            $("#editar-paciente-nombre").val(pacienteNombre);
            $("#editar-paciente-edad").val(pacienteEdad);
            $("#editar-paciente-especie").val(pacienteEspecie);
            $("#editar-paciente-raza").val(pacienteRaza);
            $("#editar-paciente-duenio-id").val(pacienteDuenioId);
            $("#editar-paciente-doctor-id").val(pacienteDoctorId);
            document.getElementById('form-editar').action = "pacientes/" + pacienteId;
        });
</script>

<!--Script para abrir el modal consultar-->
<script>
    $(document).on("click", ".abrirConsultaModal", function (event) {
        var pacienteId = $(this).data('id');
            var pacienteNombre = $(this).data('nombre');
            var pacienteEdad = $(this).data('edad');
            var pacienteEspecie = $(this).data('especie');
            var pacienteRaza = $(this).data('raza');
            var pacienteDuenioId = $(this).data('duenioid');
            var pacienteDoctorId = $(this).data('doctorid');
            console.log(pacienteDoctorId);
            console.log(pacienteEspecie);

            $("#consultar-paciente-nombre").val(pacienteNombre);
            $("#consultar-paciente-edad").val(pacienteEdad);
            $("#consultar-paciente-especie").val(pacienteEspecie);
            $("#consultar-paciente-raza").val(pacienteRaza);
            $("#consultar-paciente-duenio-id").val(pacienteDuenioId);
            $("#consultar-paciente-doctor-id").val(pacienteDoctorId);
    });
</script>

<div class="container-fluid">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
                            <th> Imagen </th>
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
                        <td><img  src="{{URL::asset($paciente->urlImagen)}}" height="300" class="d-block w-100" alt="..."></td>

                        <td>
                            <button class="btn btn-primary abrirConsultaModal" type="button" data-target="#consultarModal" 
                            data-toggle="modal"
                            data-id="{{$paciente->id}}"
                                    data-nombre="{{$paciente->nombre}}"
                                    data-edad = "{{$paciente->edad}}"
                                    data-especie = "{{$paciente->especie}}"
                                    data-raza = "{{$paciente->raza}}"
                                    data-duenioid="{{$paciente->duenio_id}}"
                                    data-doctorid = "{{$paciente->doctor_id}}"
                            >
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </td>
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

            <!-- Modal Consultar -->
            <div class="modal fade" id="consultarModal" tabindex="-1" role="dialog" aria-labelledby="consultarModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="consultarModalLabel">Consultar asistente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">  
                            <table class="table"> 
                                <tr>
                                    <td class = "form-group" >
                                        <label for="in_atributo1" style="font-weight:bold">Nombre</label>
                                        <p id="consultar-paciente-nombre" name="nombre">{{$paciente->nombre}}</p>
                                    </td>
                                    <td class = "form-group" >
                                        <label for="in_atributo2" style="font-weight:bold">Edad</label>
                                        <p id="consultar-paciente-edad" name="edad">{{$paciente->edad}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class = "form-group" >
                                        <label for="in_atributo3" style="font-weight:bold">Especie</label>
                                        <p id = "consultar-paciente-especie" name="especie">{{$paciente->especie}}</p>  
                                    </td>
                                    <td class = "form-group" >
                                        <label for="in_atributo4" style="font-weight:bold">Raza</label>
                                        <p id="consultar-paciente-raza" name="raza">{{$paciente->raza}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group">
                                        <label for="in_atributo6" style="font-weight:bold">Dueño</label>
                                        <p id="consultar-paciente-duenio-id" name="duenio_id">{{$paciente->duenio_id->nombre}} {{$paciente->duenio_id->apellido_paterno}}</p>
                                    </div>
                                    <td class="form-group">
                                        <label for="in_atributo7" style="font-weight:bold">Doctor favorito</label>
                                        <p id="consultar-paciente-doctor-id" name="doctor_id">{{$paciente->doctor_id->nombre}} {{$paciente->doctor_id->apellido_paterno}}</p>
                                    </td>
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
         
            @include('Pacientes.modalAgregaPaciente')
            @include('Pacientes.modalEditaPaciente')
            @include('Pacientes.modalEliminaPaciente')
 
        </div>

@endsection