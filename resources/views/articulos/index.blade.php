@extends('layout')

@section('contenido')


<script>
$(document).on("click", ".abrirEliminaModal", function (event) {
    var articuloNombre = $(this).data('nombre');
    var articuloId = $(this).data('id');
    var preciocom = $(this).data('preciocom');
    var marca = $(this).data('marca');
    var stock = $(this).data('stock');
    var fecha_cad = $(this).data('fecha_cad');
    var precio_u = $(this).data('precio_u');


    //console.log(articuloId);
$("#eliminar-clinica-id").val(articuloId);
    document.getElementById('eliminar-nombre-articulo').innerHTML = articuloNombre;
    document.getElementById('form-eliminar').action = "artis/" + articuloId;
});
</script>

<!--Script para editar un modal-->
<script>
    $(document).on("click", ".abrirEditaModal", function (event) {

    var articuloNombre = $(this).data('nombre');
    var articuloId = $(this).data('id');
    var preciocom = $(this).data('preciocom');
    console.log(preciocom);
    var marca = $(this).data('marca');
    var stock = $(this).data('stock');
    var fecha_cad = $(this).data('fecha_cad');
    var precio_u = $(this).data('precio_u');

    console.log(articuloId);


        $("#editar-articulo-nombre").val(articuloNombre);
        $("#editar-articulo-precio").val(preciocom);
        $("#editar-articulo-marca").val(marca);

        $("#editar-articulo-stock").val(stock);
        $("#editar-articulo-fecha").val(fecha_cad);
        $("#editar-articulo-preciou").val(precio_u);

        document.getElementById('form-editar').action = "articulos/" + articuloId;
    });
    </script>

       
<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Inventario <i class="fas fa-boxes"></i> </h1>
            <h1>Articulos</h1></div>
            <div class="row p-5">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Crear Articulo</button>
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th >Id </th>
                            <th >Nombre </th>
                            <th >Precio Compra </th>
                            <th >Marca </th>
                            <th >Stock </th>
                            <th >Fecha Caducidad</th>
                            <th >Precio Un </th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Articulos as $artis)
                        <tr>
                        <td>{{$artis->id}}</td>
                        <td>{{$artis->nombre}}</td>   
                        <td>{{$artis->preciocom}}</td>
                        <td>{{$artis->marca}}</td>
                        <td>{{$artis->stock}}</td>
                        <td>{{$artis->fecha_cad}}</td>
                        <td>{{$artis->precio_u}}</td>
                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"
                                    data-id="{{$artis->id}}"
                                    data-nombre="{{$artis->nombre}}"
                                    data-preciocom="{{$artis->preciocom}}"
                                    data-marca="{{$artis->marca}}"
                                    data-stock="{{$artis->stock}}"
                                    data-fecha_cad="{{$artis->fecha_cad}}"
                                    data-precio_u="{{$artis->precio_u}}"

                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                    data-toggle="modal" data-target="#eliminarModal"
                                    data-id="{{$artis->id}}"
                                    data-nombre="{{$artis->nombre}}"
                                    data-preciocom="{{$artis->preciocom}}"
                                    data-marca="{{$artis->marca}}"
                                    data-stock="{{$artis->stock}}"
                                    data-fecha_cad="{{$artis->fecha_cad}}"
                                    data-precio_u="{{$artis->precio_u}}"
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
                        <form action="/articulos" method="POST">
                            @csrf
                            @method('POST')
                        <div class="modal-body">                          
                                <div class="form-group">
                                    <label for="in_atributo1">Nombre: </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="in_atributo2">Precio Compra: </label>
                                    <input type="text" class="form-control" id="preciocom" name="preciocom">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo3">Marca: </label>
                                    <input type="text" class="form-control" id="marca" name="marca">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Stock: </label>
                                    <input type="text" class="form-control" id="stock" name="stock">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Fecha Caducidad: </label>
                                    <input type="text" class="form-control" id="fecha_cad" name="fecha_cad">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Precio Ut: </label>
                                    <input type="text" class="form-control" id="precio_u" name="precio_u">
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

                                    <div class="form-group">
                                        <label for="editar-articulo-precio">Precio Compra:</label>
                                        <input type="text" class="form-control" id="editar-articulo-precio" name="preciocom">
                                    </div>

                                    <div class="form-group">
                                        <label for="editar-articulo-marca">Marca: </label>
                                        <input type="text" class="form-control" id="editar-articulo-marca" name="marca">
                                    </div>

                                    <div class="form-group">
                                        <label for="editar-articulo-stock">Stock: </label>
                                        <input type="text" class="form-control" id="editar-articulo-stock" name="stock">
                                    </div>

                                    <div class="form-group">
                                        <label for="editar-articulo-fecha">Fecha Cad: </label>
                                        <input type="text" class="form-control" id="editar-articulo-fecha" name="fecha_cad">
                                    </div>

                                    <div class="form-group">
                                        <label for="editar-articulo-preciou">Precio Un</label>
                                        <input type="text" class="form-control" id="editar-articulo-preciou" name="precio_u">
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
                                <h5 class="modal-title" id="eliminarModalLabel">Eliminar Articulo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-eliminar" method="POST">
                                    @csrf
                                    @method('DELETE')
                            <div class="modal-body">
                                ¿Estás seguro que desea eliminar Artículo <span id="eliminar-nombre-articulo"></span>? 
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