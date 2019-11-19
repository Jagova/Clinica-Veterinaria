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

<!--Script para editar un modal-->
<script>
    $(document).on("click", ".abrirEditaModal", function (event) {
        var asistenteNombre1 = $(this).data('nombre1');
        var asistenteApellido1 = $(this).data('apellido1');
        var asistenteApellido2 = $(this).data('apellido2');
        var asitenteUrlImagen = $(this).data('urlimagen');
        var asistenteTelefono = $(this).data('telefono');
        var asistenteCorreo=  $(this).data('correo');
        var asistenteClinica = $(this).data('clinica');
        var asistenteId = $(this).data('id');
        var asistenteNombre = $(this).data('nombre');
       
        $("#editar-asistente-nombre1").val(asistenteNombre1);
        $("#editar-asistente-apellido1").val(asistenteApellido1);
        $("#editar-asistente-apellido2").val(asistenteApellido2);
       $("#editar-asistente-correo").val(asistenteCorreo);
        $("#editar-asistente-telefono").val(asistenteTelefono);
        $("#editar-asistente-clinica").val(asistenteClinica);

        document.getElementById('editar-asistente-nombre').innerHTML = asistenteNombre;
        document.getElementById('form-editar').action = "asistentes/" + asistenteId;
        console.log("asistentes/" + asistenteId);
    });
</script>

<!--Script para abrir el modal consultar-->
<script>
    $(document).on("click", ".abrirConsultaModal", function (event) {
       
        var asistenteNombre1 = $(this).data('nombre1');
     
        var asistenteApellido1 = $(this).data('apellido1');
        var asistenteApellido2 = $(this).data('apellido2');
        var asistenteUrlImagen = $(this).data('urlImagen');
        var asistenteTelefono = $(this).data('telefono');
        var asistenteCorreo=  $(this).data('correo');
        var asistenteClinica = $(this).data('clinica');
        var asistenteId = $(this).data('id');
        document.getElementById("consultar-asistente-nombre1").innerHTML = asistenteNombre1;
        document.getElementById("consultar-asistente-apellido1").innerHTML = asistenteApellido1;
        document.getElementById("consultar-asistente-apellido2").innerHTML = asistenteApellido2;
        document.getElementById("consultar-asistente-correo").innerHTML = asistenteCorreo;
        document.getElementById("consultar-asistente-telefono").innerHTML = asistenteTelefono;
        document.getElementById("consultar-asistente-clinica").innerHTML = asistenteClinica;
        document.getElementById('consultar-asistente-nombre').innerHTML = asistenteNombre;
        document.getElementById("imagen").src = asistenteUrlImagen;
    });
</script> 
   

       <!--Muestra los errores-->
<div class="container-fluid">
        @if($errors->any())
        <div class="notification is-danger"> 
                <ul>
            @foreach($errors->all() as $errorr)
            <li> {{$errorr}}</li>
            
            @endforeach
        </ul>
        </div>
        @endif
        
            <div class="row p-5"><h1 class="display-1">Asistentes <i class="fas fa-hands-helping"></i> </h1></div>
            <div class="row p-5">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Agregar asistente</button>
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
                        @foreach ($Asistentes as $asistente)
                        <tr>
                        <td>
                                <div>
                            <button class="btn btn-primary abrirConsultaModal" type="button" data-target="#consultarModal" 
                                
                            data-toggle="modal"
                            data-id="{{$asistente->id}}"
                                    data-nombre1="{{$asistente->primer_nombre}}"
                                    data-apellido1="{{$asistente->apellido_paterno}}"
                                    data-apellido2="{{$asistente->apellido_materno}}"
                                    data-urlimagen="{{$asistente->urlImagen}}"
                                    data-correo="{{$asistente->correo}}"
                                    data-telefono="{{$asistente->telefono}}"
                                    data-clinica="{{$asistente->clinica_id}}"
                                    data-nombre="{{$asistente->primer_nombre}}  {{$asistente->apellido_paterno}} {{$asistente->apellido_materno}}"
                                   
                            >
                                <i class="fas fa-plus-circle"></i>
                            </button>
</div></td>
                        <td>{{$asistente->id}}</td>
                        <td>{{$asistente->primer_nombre}} {{$asistente->apellido_paterno}}  {{$asistente->apellido_materno}}</td>   
                        <td>{{$asistente->Clinica->nombre}}</td>
                        <td>
                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"
                                    data-id="{{$asistente->id}}"
                                    data-nombre1="{{$asistente->primer_nombre}}"
                                    data-apellido1="{{$asistente->apellido_paterno}}"
                                    data-apellido2="{{$asistente->apellido_materno}}"
                                    data-urlimagen = "{{$asistente->urlImagen}}"
                                    data-correo="{{$asistente->correo}}"
                                    data-telefono="{{$asistente->telefono}}"
                                    data-clinica="{{$asistente->clinica_id}}"
                                    data-nombre="{{$asistente->primer_nombre}} {{$asistente->apellido_paterno}} {{$asistente->apellido_materno}}"

                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                data-toggle="modal" data-target="#eliminarModal"
                                data-id="{{$asistente->id}}"
                                data-nombre="{{$asistente->primer_nombre}} {{$asistente->apellido_paterno}} {{$asistente->apellido_materno}}"
                                data-clinica="{{$asistente->clinica}}"
                                >Eliminar <i class="fas fa-trash-alt"></i> </button>
                                </div>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>           
                </table>
            </div>
           
           
            
            @include('Asistentes.modalAgregarAsistente')
            @include('Asistentes.modalEliminarAsistente')
            @include('Asistentes.modalEditarAsistente')
            @include('Asistentes.modalConsultarAsistente') 
           
@endsection