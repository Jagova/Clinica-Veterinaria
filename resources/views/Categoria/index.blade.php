@extends('layout')

@section('contenido')


<script>
$(document).on("click", ".abrirEliminaModal", function (event) {
    var articuloNombre = $(this).data('nombre');
    var articuloId = $(this).data('id');


    //console.log(articuloId);
$("#eliminar-clinica-id").val(articuloId);
    document.getElementById('eliminar-nombre-articulo').innerHTML = articuloNombre;
    document.getElementById('form-eliminar').action = "categorias/" + articuloId;
});
</script>

<!--Script para editar un modal-->
<script>
    $(document).on("click", ".abrirEditaModal", function (event) {
    var articuloNombre = $(this).data('nombre');
        var articuloId = $(this).data('id');

    console.log(articuloId);


        $("#editar-articulo-nombre").val(articuloNombre);

        document.getElementById('form-editar').action = "categorias/" + articuloId;
    });
    </script>

       
<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Categorias <i class="fas fa-boxes"></i> </h1>
                <div>             
                    <a href="medicamentos/">Categorias</a> <i class="fas fa-pills"></i>
                </div>
            </div>
            <div class="row p-5">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Crear Categoria  Articulo</button>
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th >Id </th>
                            <th >Nombres </th>
               
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Categoria as $categoria)
                        <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->nombre}}</td>   
                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"
                                    data-id="{{$categoria->id}}"
                                    data-nombre="{{$categoria->nombre}}"
                                
                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                    data-toggle="modal" data-target="#eliminarModal"
                                    data-id="{{$categoria->id}}"
                                    data-nombre="{{$categoria->nombre}}"
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
                            <h5 class="modal-title" id="agregarModalLabel">Crear Articulo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/categorias" method="POST">
                            @csrf
                            @method('POST')
                        <div class="modal-body">                          
                                <div class="form-group">
                                    <label for="in_atributo1">Nombre: </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
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
                                <h5 class="modal-title" id="editarModalLabel">Editar Articulo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-editar" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="editar-nombre">Nombre:</label>
                                            <input type="text" class="form-control" id="editar-articulo-nombre" name="nombre">
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
                                <h5 class="modal-title" id="eliminarModalLabel">Eliminar Categoria Articulo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-eliminar" method="POST">
                                    @csrf
                                    @method('DELETE')
                            <div class="modal-body">
                                ¿Estás seguro que desea eliminar Categoria Artículo <span id="eliminar-nombre-articulo"></span>? 
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