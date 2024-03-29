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
            
            var pacienteUrlImagen = $(this).data('urlimagen');

            console.log(pacienteUrlImagen);
            document.getElementById('editarmo-paciente-nombre').innerHTML = pacienteNombre;

            $("#editar-paciente-nombre").val(pacienteNombre);
            $("#editar-paciente-edad").val(pacienteEdad);
            $("#editar-paciente-especie").val(pacienteEspecie);
            $("#editar-paciente-raza").val(pacienteRaza);
            $("#editar-paciente-duenio-id").val(pacienteDuenioId);
            $("#editar-paciente-doctor-id").val(pacienteDoctorId);



            console.log(pacienteId);

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

            var pacienteUrlImagen = $(this).data('urlimagen');


            document.getElementById("consultar-paciente-nombre").innerHTML = pacienteNombre;
            document.getElementById("consultar-paciente-edad").innerHTML = pacienteEdad;
            document.getElementById("consultar-paciente-especie").innerHTML = pacienteEspecie;
            document.getElementById("consultar-paciente-raza").innerHTML = pacienteRaza;
            document.getElementById("consultar-paciente-duenio-id").innerHTML = pacienteDuenioId;
            document.getElementById("consultar-paciente-doctor-id").innerHTML = pacienteDoctorId;


            document.getElementById("imagen").src = pacienteUrlImagen;
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
                            <th></th>
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
                        <td>
                            <button class="btn btn-primary abrirConsultaModal" type="button" data-target="#consultarModal" 
                                data-toggle="modal"
                                data-id="{{$paciente->id}}"
                                        data-nombre="{{$paciente->nombre}}"
                                        data-edad = "{{$paciente->edad}}"
                                        data-especie = "{{$paciente->especie}}"
                                        data-raza = "{{$paciente->raza}}"
                                        data-duenioid="{{$paciente->Dueno->nombre}}"
                                        data-doctorid = "{{$paciente->Doctor->primer_nombre}} {{$paciente->Doctor->apellido_paterno}}"
                                        data-urlimagen = "{{$paciente->urlImagen}}"
                                >
                                    <i class="fas fa-plus-circle"></i>
                            </button>
                        </td>
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
                                    data-duenioid="{{$paciente->dueno_id}}"
                                    data-doctorid = "{{$paciente->doctor_id}}"
                                    data-urlimagen = "{{$paciente->urlImagen}}"
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

            @include('Pacientes.modalConsultarPaciente')
            @include('Pacientes.modalAgregaPaciente')
            @include('Pacientes.modalEditaPaciente')
            @include('Pacientes.modalEliminaPaciente')
 
        </div>

@endsection