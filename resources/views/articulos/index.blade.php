@extends('layout')

@section('contenido')


<script>
    $(document).on("click", ".abrirEliminaModal", function (event) {
        var doctorClinica = $(this).data('clinica');
        var categoria = $(this).data('categoria');
        var subcategoria = $(this).data('subcategoria');
        var articuloNombre = $(this).data('nombre');
        var articuloId = $(this).data('id');
        var preciocom = $(this).data('preciocom');
        var marca = $(this).data('marca');
        var stock = $(this).data('stock');
        var fecha_cad = $(this).data('fecha_cad');
        var precio_u = $(this).data('precio_u');
        $("#eliminar-clinica-id").val(articuloId);
        document.getElementById('eliminar-nombre-articulo').innerHTML = articuloNombre;
        document.getElementById('form-eliminar').action = "articulos/" + articuloId;
    });
</script>

<!--Script para editar un modal-->
<script>
    $(document).on("click", ".abrirEditaModal", function (event) {

        var doctorClinica = $(this).data('clinica');

        var articuloNombre = $(this).data('nombre');
        var articuloId = $(this).data('id');
        var preciocom = $(this).data('preciocom');
        var marca = $(this).data('marca');
        var stock = $(this).data('stock');
        var fecha_cad = $(this).data('fecha_cad');
        var precio_u = $(this).data('precio_u');

        var categoria = $(this).data('categoria');
        var subcategoria = $(this).data('subcategoria');


        $("#editar-articulo-nombre").val(articuloNombre);
        $("#editar-articulo-precio").val(preciocom);
        $("#editar-articulo-marca").val(marca);

        $("#editar-articulo-stock").val(stock);
        $("#editar-articulo-fecha").val(fecha_cad);
        $("#editar-articulo-preciou").val(precio_u);


        $("#editar-categoria").val(categoria);
        $("#editar-subcategoria").val(subcategoria);

        $("#editar-doctor-clinica").val(doctorClinica);

        document.getElementById('form-editar').action = "articulos/" + articuloId;
    });
    </script>

       



<!--Script para abrir el modal consultar-->
<script>
    $(document).on("click", ".abrirConsultaModal", function (event) {
        var doctorClinica = $(this).data('clinica');
        var articuloNombre = $(this).data('nombre');
        var articuloId = $(this).data('id');
        var preciocom = $(this).data('preciocom');
        var marca = $(this).data('marca');
        var stock = $(this).data('stock');
        var fecha_cad = $(this).data('fecha_cad');
        var precio_u = $(this).data('precio_u');
        var categoria = $(this).data('categoria');
        var subcategoria = $(this).data('subcategoria');


<<<<<<< HEAD
        $("#consultar-articulo-nombre").innerHTML = articuloNombre;
        $("#consultar-articulo-precio").val(preciocom);
        $("#consultar-articulo-marca").val(marca);
        $("#consultar-articulo-stock").val(stock);
        $("#consultar-articulo-fecha").val(fecha_cad);
        $("#consultar-articulo-preciou").val(precio_u);
        $("#consultar-categoria").val(categoria);
        $("#consultar-subcategoria").val(subcategoria);
        $("#consultar-doctor-clinica").val(doctorClinica);
=======
        document.getElementById("consultar-articulo-nombre").innerHTML = articuloNombre;
        document.getElementById("consultar-articulo-precio").innerHTML = preciocom;
        document.getElementById("consultar-articulo-marca").innerHTML = marca;
        document.getElementById("consultar-articulo-stock").innerHTML = stock;
        document.getElementById("consultar-articulo-fecha").innerHTML = fecha_cad;
        document.getElementById("consultar-articulo-preciou").innerHTML = precio_u;
        document.getElementById("consultar-categoria").innerHTML = categoria;
        document.getElementById("consultar-subcategoria").innerHTML = subcategoria;
        document.getElementById("consultar-doctor-clinica").innerHTML = doctorClinica;


>>>>>>> master
    });
</script>


<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Inventario <i class="fas fa-boxes"></i> </h1>
                <div>             
              <!--      <a href="articulos/">Articulos</a> 
                    <a href="categoria/">Categoria</a> 
                    <a href="subcategoria/">Subcategoria</a> 
                -->           
                </div>
            </div>
            <div class="row p-5">
                                


                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Crear Articulo</button>

                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <td></td>
                            <th >Id </th>
                            <th >Nombre </th>
                            <th >Precio Compra </th>
                            <th >Marca </th>


                            <th >Stock </th>
                            <th >Fecha Caducidad</th>
                            <th >Precio Un </th>

                            <th >Categoria </th>

                            <th >SubCategoria </th>

                            <th >Clinica </th>
                            <th>Imagen </th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Articulos as $articulo)
                        <tr>
                        <td>
                            <button class="btn btn-primary abrirConsultaModal" type="button" data-target="#consultarModal" 
                            data-toggle="modal"
                            data-id="{{$articulo->id}}"
                                    data-nombre="{{$articulo->nombre}}"
                                    data-preciocom="{{$articulo->preciocom}}"
                                    data-marca="{{$articulo->marca}}"
                                    data-stock="{{$articulo->stock}}"
                                    data-fecha_cad="{{$articulo->fecha_cad}}"
                                    data-precio_u="{{$articulo->precio_u}}"
                                    data-categoria="{{$articulo->categoria_id}}"
                                    data-subcategoria="{{$articulo->subcategoria_id}}"
                                    data-clinica="{{$articulo->clinica_id}}"
                            >
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </td>
                        <td>{{$articulo->id}}</td>
                        <td>{{$articulo->nombre}}</td>   
                        <td>{{$articulo->preciocom}}</td>
                        <td>{{$articulo->marca}}</td>
                        <td>{{$articulo->stock}}</td>
                        <td>{{$articulo->fecha_cad}}</td>
                        <td>{{$articulo->precio_u}}</td>
                        <td>{{$articulo->Categoria->nombre}}</td>
                        <td>{{$articulo->Subcategoria->nombre}}</td>
                        <td>{{$articulo->Clinica->nombre}}</td>
                        <td><img  src="{{URL::asset($articulo->urlImagen)}}" height="300" class="d-block w-100" alt="..."></td>
                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"
                                    data-id="{{$articulo->id}}"
                                    data-nombre="{{$articulo->nombre}}"
                                    data-preciocom="{{$articulo->preciocom}}"
                                    data-marca="{{$articulo->marca}}"
                                    data-stock="{{$articulo->stock}}"
                                    data-fecha_cad="{{$articulo->fecha_cad}}"
                                    data-precio_u="{{$articulo->precio_u}}"
                                    data-categoria="{{$articulo->categoria_id}}"
                                    data-subcategoria="{{$articulo->subcategoria_id}}"
                                    data-clinica="{{$articulo->clinica_id}}"

                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                    data-toggle="modal" data-target="#eliminarModal"
                                    data-id="{{$articulo->id}}"
                                    data-nombre="{{$articulo->nombre}}"
                                    data-preciocom="{{$articulo->preciocom}}"
                                    data-marca="{{$articulo->marca}}"
                                    data-stock="{{$articulo->stock}}"
                                    data-fecha_cad="{{$articulo->fecha_cad}}"
                                    data-precio_u="{{$articulo->precio_u}}"
                                    data-categoria="{{$articulo->categoria}}"
                                    data-subcategoria="{{$articulo->subcategoria}}"
                                    data-clinica="{{$articulo->clinica}}"
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
                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo1">Nombre: </label>
                                        <input type="text" required class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo2">Precio Compra: </label>
                                    <input type="number" min="1" max="1000" required class="form-control" id="preciocom" name="preciocom">

                                </div>


                            </div>

                            <div>
                                Foto
                                <input type="file" name="imagen" id=imagen>
                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo3">Marca: </label>
                                    <input type="text" required class="form-control" id="marca" name="marca">
                                </div>

                                <div class="col-6">
                                    <label for="in_atributo4">Stock: </label>
                                    <input type="number" min="1" max="1000" required class="form-control" id="stock" name="stock">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo5">Fecha Caducidad: </label>
                                    <input type="date" min="2019-01-01" max="2025-12-31"  required class="form-control" id="fecha_cad" name="fecha_cad">
                                </div>

                                <div class="col-6">
                                    <label for="in_atributo6">Precio Ut: </label>
                                    <input type="number" min="1" max="1000" required class="form-control" id="precio_u" name="precio_u">
                                </div>
                            </div>


                            <div class="form-group row ">
                                <div class="col-6">
                                        <label for="in_atributo7">Categoria</label>
                                        <select class="form-control" name="categoria">
                                            @foreach ($Categoria as $categoria)                                  
                                                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                            @endforeach
                                        </select>
                                </div>


                            <div class="col-6">
                                        <label for="in_atributo8">Subcategoria</label>
                                        <select class="form-control" name="subcategoria">
                                            @foreach ($Subcategoria as $subcategoria)                                  
                                                <option value="{{$subcategoria->id}}">{{$subcategoria->nombre}}</option>
                                            @endforeach
                                        </select>
                                </div>

                            </div>


                                <div class="form-group">
                                        <label for="in_atributo9">Clinica</label>
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
                            <h5 class="modal-title" id="consultarModalLabel">Consultar artículo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">  
                            <table class="table"> 
                                <tr>
                                    <td class="form-group">
                                        <label for="consultar-nombre" style="font-weight:bold">Nombre:</label>
                                        <p id="consultar-articulo-nombre" name="nombre"></p>
                                    </td>

                                    <td class="form-group">
                                        <label for="consultar-articulo-precio" style="font-weight:bold">Precio Compra:</label>
                                        <p id="consultar-articulo-precio" name="preciocom"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group">
                                        <label for="consultar-articulo-marca" style="font-weight:bold">Marca: </label>
                                        <p id="consultar-articulo-marca" name="marca"></p>
                                    </td>

                                    <td class="form-group">
                                        <label for="consultar-articulo-stock" style="font-weight:bold">Stock: </label>
                                        <p id="consultar-articulo-stock" name="stock"></p>
                                    </td>
                                </tr>
                                    
                                <tr>
                                    <td class="form-group">
                                        <label for="consultar-articulo-fecha" style="font-weight:bold">Fecha Cad: </label>
                                        <p id="consultar-articulo-fecha" name="fecha_cad"></p>
                                    </td>

                                    <td class="form-group">
                                        <label for="consultar-articulo-preciou" style="font-weight:bold">Precio Un</label>
                                        <p id="consultar-articulo-preciou" name="precio_u"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group">
                                        <label for="consultar-categoria">Categoria</label>
                                        <p name="categoria" id="consultar-categoria"></p>
                                    </td>
                                    <td class="form-group">
                                        <label for="consultar-subcategoria" tyle="font-weight:bold">Subcategoria</label>
                                        <p name="subcategoria" id="consultar-subcategoria"></p>
                                    </div>
                                      
                                </tr>
                                    <td class="form-group">
                                        <label for="consultar-doctor-clinica" style="font-weight:bold">Clínica</label>
                                        <p name="clinica" id="consultar-doctor-clinica"></p>
                                    </td>   
                                <tr>
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
                                <h5 class="modal-title" id="editarModalLabel">Editar Articulo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-editar" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group row ">
                                        <div class="col-6">
                                        <label for="editar-nombre">Nombre:</label>
                                            <input type="text" required class="form-control" id="editar-articulo-nombre" name="nombre">
                                    </div>

                                    <div class="col-6">
                                        <label for="editar-articulo-precio">Precio Compra:</label>
                                        <input type="text" required class="form-control" id="editar-articulo-precio" name="preciocom">
                                    </div>
                                </div>

                                    <div class="form-group row">
                                        <div class="col-6">
                                        <label for="editar-articulo-marca">Marca: </label>
                                        <input type="text" required class="form-control" id="editar-articulo-marca" name="marca">
                                    </div>

                                    <div class="col-6">
                                        <label for="editar-articulo-stock">Stock: </label>
                                        <input type="number" min="1" max="1000" required class="form-control" id="editar-articulo-stock" name="stock">
                                    </div>
                                </div>

                                    <div class="form-group row">
                                        <div class="col-6">
                                        <label for="editar-articulo-fecha">Fecha Cad: </label>
                                        <input type="date" min="2019-01-01" max="2025-12-31" required class="form-control" id="editar-articulo-fecha" name="fecha_cad">
                                    </div>

                                    <div class="col-6">
                                        <label for="editar-articulo-preciou">Precio Un</label>
                                        <input type="text" required class="form-control" id="editar-articulo-preciou" name="precio_u">
                                    </div>
                                </div>

                            <div class="form-group row">
                                <div class="col-6">
                                        <label for="editar-categoria">Categoria</label>
                                        <select required class="form-control" name="categoria" id="editar-categoria">
                                            @foreach ($Categoria as $categoria)                                  
                                                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                            @endforeach
                                        </select>
                                </div>


                            <div class="col-6">
                                        <label for="editar-subcategoria">Subcategoria</label>
                                        <select required class="form-control" name="subcategoria" id="editar-subcategoria">
                                            @foreach ($Subcategoria as $subcategoria)                                  
                                                <option value="{{$subcategoria->id}}">{{$subcategoria->nombre}}</option>
                                            @endforeach
                                        </select>
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