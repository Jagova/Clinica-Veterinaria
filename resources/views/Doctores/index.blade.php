@extends('layout')

@section('contenido')

<!--Script para abrir el modal elimina-->
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

<!--Script para abrir el modal edita-->
<script>
    $(document).on("click", ".abrirEditaModal", function (event) {
        var doctorNombre1 = $(this).data('nombre1');
        var doctorApellido1 = $(this).data('apellido1');
        var doctorApellido2 = $(this).data('apellido2');
        var doctorEspecialidad1 = $(this).data('especialidad1');
        var doctorEspecialidad2 = $(this).data('especialidad2');
        var doctorClinica = $(this).data('clinica');
        var doctorId = $(this).data('id');

        var doctorUrlImagen = $(this).data('urlimagen');
        
        var nombreCompleto = doctorNombre1 +" "+ doctorNombre2;

        document.getElementById('editarmo-doctor-nombre1').innerHTML = nombreCompleto;

        $("#editar-doctor-nombre1").val(doctorNombre1);
        $("#editar-doctor-apellido1").val(doctorApellido1);
        $("#editar-doctor-apellido2").val(doctorApellido2);
        $("#editar-doctor-especialidad1").val(doctorEspecialidad1);
        $("#editar-doctor-especialidad2").val(doctorEspecialidad2);
        $("#editar-doctor-clinica").val(doctorClinica);

        document.getElementById('form-editar').action = "doctores/" + doctorId;

    });
</script>

<!--Script para abrir el modal editar contraseña-->
<script>
    $(document).on("click", ".abrirEditaContraseñaModal", function (event) {
        var doctorId = $(this).data('id');
        document.getElementById('editarmo-doctor-nombre1').innerHTML = nombreCompleto;

        document.getElementById('form-editar-contraseña').action = "doctoreseditapass/" + doctorId;

    });
</script>

<!--Script para abrir el modal consultar-->
<script>
    $(document).on("click", ".abrirConsultaModal", function (event) {
        var doctorNombre1 = $(this).data('nombre1');
        var doctorApellido1 = $(this).data('apellido1');
        var doctorApellido2 = $(this).data('apellido2');
        var doctorEspecialidad1 = $(this).data('especialidad1');
        var doctorEspecialidad2 = $(this).data('especialidad2');
        var doctorClinica = $(this).data('clinica');
        var doctorId = $(this).data('id');

        var doctorUrlImagen = $(this).data('urlimagen');



        document.getElementById("consultar-doctor-nombre1").innerHTML = doctorNombre1;
        document.getElementById("consultar-doctor-apellido1").innerHTML = doctorApellido1;
        document.getElementById("consultar-doctor-apellido2").innerHTML = doctorApellido2;
        document.getElementById("consultar-doctor-especialidad1").innerHTML = doctorEspecialidad1;
        document.getElementById("consultar-doctor-especialidad2").innerHTML = doctorEspecialidad2;
        document.getElementById("consultar-doctor-clinica").innerHTML = doctorClinica;

        document.getElementById("imagen").src = doctorUrlImagen;

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
            <div class="row p-5"><h1 class="display-1">Doctores <i class="fas fa-stethoscope"></i> </h1></div>
            <div class="row p-5">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Agregar doctor</button>
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th></th>
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
                                data-apellido1="{{$doctor->apellido_paterno}}"
                                data-apellido2="{{$doctor->apellido_materno}}"
                                data-especialidad1="{{$doctor->especialidad_1}}"
                                data-especialidad2="{{$doctor->especialidad_2}}"
                                data-clinica="{{$doctor->clinica_id}}"
                                data-urlimagen="{{$doctor->urlImagen}}"
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
                                    data-apellido1="{{$doctor->apellido_paterno}}"
                                    data-apellido2="{{$doctor->apellido_materno}}"
                                    data-especialidad1="{{$doctor->especialidad_1}}"
                                    data-especialidad2="{{$doctor->especialidad_2}}"
                                    data-clinica="{{$doctor->clinica_id}}"
                                    data-urlimagen = "{{$doctor->urlImagen}}"

                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaContraseñaModal" data-toggle="modal" 
                                    data-target="#editarContraseñaModal"
                                    data-id="{{$doctor->id}}"
                                    >Modificar Contraseña <i class="fas fa-pencil-alt"></i> </button>

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



            @include('Doctores.modalConsultaDoctor')
            @include('Doctores.modalAgregaDoctor')
            @include('Doctores.modalEditaDoctor')
            @include('Doctores.modalEliminaDoctor')
            @include('Doctores.modalEditarContraseña')
        </div>

@endsection 