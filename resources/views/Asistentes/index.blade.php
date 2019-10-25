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
        var asistenteFoto = $(this).data('foto');
        var asistenteEspecialidad1 = $(this).data('especialidad1');
        var asistenteEspecialidad2 = $(this).data('especialidad2');
        var asistenteTelefono = $(this).data('telefono');
        var asistenteCorreo=  $(this).data('correo');
        var asistenteClinica = $(this).data('clinica');
        var asistenteId = $(this).data('id');
       
        $("#editar-asistente-nombre1").val(asistenteNombre1);
        $("#editar-asistente-nombre2").val(asistenteNombre2);
        $("#editar-asistente-apellido1").val(asistenteApellido1);
        $("#editar-asistente-apellido2").val(asistenteApellido2);
        $("#editar-asistente-especialidad1").val(asistenteEspecialidad1);
        $("#editar-asistente-especialidad2").val(asistenteEspecialidad2);
        $("#editar-asistente-correo").val(asistenteCorreo);
        $("#editar-asistente-telefono").val(asistenteTelefono);
        $("#editar-asistente-clinica").val(asistenteClinica);

        document.getElementById('form-editar').action = "asistentes/" + asistenteId;
        console.log("asistentes/" + asistenteId);
    });
</script>

<!--Script para abrir el modal consultar-->
<script>
    $(document).on("click", ".abrirConsultaModal", function (event) {
        var asistenteNombre1 = $(this).data('nombre1');
        var asistenteNombre2 = $(this).data('nombre2');
        var asistenteApellido1 = $(this).data('apellido1');
        var asistenteApellido2 = $(this).data('apellido2');
        var asistenteFoto = $(this).data('foto');
        var asistenteEspecialidad1 = $(this).data('especialidad1');
        var asistenteEspecialidad2 = $(this).data('especialidad2');
        var asistenteTelefono = $(this).data('telefono');
        var asistenteCorreo=  $(this).data('correo');
        var asistenteClinica = $(this).data('clinica');
        var asistenteId = $(this).data('id');
       
        document.getElementById("consultar-asistente-nombre1").innerHTML = asistenteNombre1;
        document.getElementById("consultar-asistente-nombre2").innerHTML = asistenteNombre2;
        document.getElementById("consultar-asistente-apellido1").innerHTML = asistenteApellido1;
        document.getElementById("consultar-asistente-apellido2").innerHTML = asistenteApellido2;
        document.getElementById("consultar-asistente-foto").innerHTML = asistenteFoto;
        document.getElementById("consultar-asistente-especialidad1").innerHTML = asistenteEspecialidad1;
        document.getElementById("consultar-asistente-especialidad2").innerHTML = asistenteEspecialidad2;
        document.getElementById("consultar-asistente-correo").innerHTML = asistenteCorreo;
        document.getElementById("consultar-asistente-telefono").innerHTML = asistenteTelefono;
        document.getElementById("consultar-asistente-clinica").innerHTML = asistenteClinica;
    });
</script> 
   

       
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
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Clinica</th>
                            <th> Fotografía </th>
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
                                    data-nombre2="{{$asistente->segundo_nombre}}"
                                    data-apellido1="{{$asistente->apellido_paterno}}"
                                    data-apellido2="{{$asistente->apellido_materno}}"
                                    data-foto="{{$asistente->urlImagen}}"
                                    data-especialidad1="{{$asistente->especialidad_1}}"
                                    data-especialidad2="{{$asistente->especialidad_2}}"
                                    data-correo="{{$asistente->correo}}"
                                    data-telefono="{{$asistente->telefono}}"
                                    data-clinica="{{$asistente->clinica_id}}"
                                   
                            >
                                <i class="fas fa-plus-circle"></i>
                            </button>
</div></td>
                        <td>{{$asistente->id}}</td>
                        <td>{{$asistente->primer_nombre}} {{$asistente->segundo_nombre}} {{$asistente->apellido_paterno}}  {{$asistente->apellido_materno}}</td>   
                        <td>
                                                    <td><img  src="{{URL::asset($asistente->urlImagen)}}" height="300" class="d-block w-100" alt="..."></td>
                        
                       </td>
                      
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
                                    data-correo="{{$asistente->correo}}"
                                    data-telefono="{{$asistente->telefono}}"
                                    data-clinica="{{$asistente->clinica_id}}"
                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                data-toggle="modal" data-target="#eliminarModal"
                                data-id="{{$asistente->id}}"
                                data-nombre="{{$asistente->primer_nombre}} {{$asistente->segundo_nombre}} {{$asistente->apellido_paterno}} {{$asistente->apellido_materno}}"
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
                        <form action="/asistentes" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                        <div class="modal-body">                          
                                <div class="form-group row">
                                        <div class="col-6">
                                                <label for="in_atributo2">Primer nombre</label>
                                                <input type="text" class="form-control" id="nombre1" name="nombre1"  >        
                                        </div>
                                        <div class="col-6">
                                                <label for="in_atributo2">Segundo nombre</label>
                                                <input type="text" class="form-control {{$errors->has('title')?'is-danger':''}}"     id="direccion" name="nombre2" value="{{old('direccion')}}" required >        
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                            <label for="in_atributo2">Apellido Paterno</label>
                                            <input type="text" class="form-control" id="direccion" name="ApPaterno" requiredon keypress='return (event.charCode >= 65 && event.charCode <= 90)&&(event.charCode >= 65 && event.charCode <= 90)'>        
                                    </div>
                                    <div class="col-6">
                                            <label for="in_atributo2">Apellido Materno</label>
                                            <input type="text" class="form-control" id="direccion" name="ApMaterno" required>        
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class="col-5">
                                        <div>
                                            Fotografía
                                            <input type="file" name="imagen" id=imagen>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col-6">
                                                <label for="in_atributo2">Especialidad 1</label>
                                                <input type="text" class="form-control" id="direccion" name="esp1" required>        
                                        </div>
                                        <div class="col-6">
                                                <label for="in_atributo2">Especialidad 2</label>
                                                <input type="text" class="form-control" id="direccion" name="esp2">        
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                            <label for="editar-asistente-especialidad1">Correo</label>
                                            <input type="email" class="form-control" id="correo" name="correo" required>        
                                    </div>
                                    <div class="col-6">
                                            <label for="editar-asistente-especialidad2">Telefono</label>
                                            <input class="form-control" id="telefono" name="telefono" required input type="tel"  min="10" max="10"onkeypress='return event.charCode >= 48 && event.charCode <= 57'>        
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
            
            
            
            @include('Asistentes.modalEliminarAsistente')
            @include('Asistentes.modalEditarAsistente')
            @include('Asistentes.modalConsultarAsistente') 
           
@endsection