@extends('layout')

@section('contenido')

<script>
$(document).on("click", ".abrirEliminaModal", function (event) {
    var servicioNombre = $(this).data('nombre');
    var servicioId = $(this).data('id');
    $("#eliminar-id").val(servicioId);
    document.getElementById('eliminar-nombre').innerHTML = servicioNombre;
    console.log(servicioNombre);
    document.getElementById('form-eliminar').action = "servicios/" + servicioId;
});
</script>


<script>
   $(document).on("click", ".abrirEditaModal", function (event) {
        var servicioNombre = $(this).data('nombre');
        var servicioClinica = $(this).data('clinica');
        var servicioPrecio = $(this).data('precio');
        var servicioId = $(this).data('id');
        $("#editar-nombre").val(servicioNombre);
        $("#editar-precio").val(servicioPrecio);
        $("#editar-clinica").val(servicioClinica);
        document.getElementById('form-editar').action = "servicios/" + servicioId;
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
            <div class="row p-5"><h1 class="display-1">Servicios <i class="fas fa-heartbeat"></i> </h1></div>
            <div class="row p-5">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Agregar servicio</button>
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre del servicio</th>
                            <th>Precio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($Servicios as $servicio)
                            <tr>
                            <td>{{$servicio->id}}</td>
                            <td>{{$servicio->nombre}}</td>   
                            <td>{{$servicio->precio}}</td>
                            <td>
                                    <div class="btn-group" role="group" aria-label="Acciones"> 
                                        <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                        data-target="#editarModal"
                                        data-id="{{$servicio->id}}"
                                        data-nombre="{{$servicio->nombre}}"
                                        data-precio = "{{$servicio->precio}}"
                                        data-clinica = "{{$servicio->clinica_id}}"
                                        >Modificar <i class="fas fa-pencil-alt"></i> </button>
                                        <button type="button" class="btn btn-danger abrirEliminaModal"
                                        data-toggle="modal" data-target="#eliminarModal"
                                        data-id="{{$servicio->id}}"
                                        data-nombre="{{$servicio->nombre}}"
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
                            <h5 class="modal-title" id="agregarModalLabel">Agregar servicio</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/servicios" method="POST">
                            @csrf
                            @method('POST')
                        <div class="modal-body">
                                                        
                                <div class="form-group row">
                                        <div class="col-12">
                                                <label for="in_atributo2">Nombre del servicio</label>
                                                <input type="text" required class="form-control" id="nombre" name="nombre">        
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                            <label for="in_atributo2">Precio</label>
                                            <input type="number" required class="form-control" id="precio" name="precio">        
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
                                <h5 class="modal-title" id="editarModalLabel">Editar servicio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-editar" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">                          
                                <div class="form-group row">
                                        <div class="col-12">
                                                <label for="editar-doctor-nombre1">Nombre del servicio</label>
                                                <input type="text" class="form-control" id="editar-nombre" name="nombre">        
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                            <label for="editar-doctor-apellido1">Precio</label>
                                            <input type="text" class="form-control" id="editar-precio" name="precio">        
                                    </div>                                   
                                </div>
                                <div class="form-group">
                                        <label for="editar-doctor-clinica">Clínica</label>
                                        <select class="form-control" name="clinica">
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
                                <h5 class="modal-title" id="eliminarModalLabel">Eliminar servicio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-eliminar" method="POST">
                                    @csrf
                                    @method('DELETE')
                            <div class="modal-body">
                                ¿Estás seguro de eliminar <span id="eliminar-nombre"></span> como servicio? 
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