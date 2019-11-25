@extends('layout')

@section('contenido')


<script>
    $(document).on("click", ".abrirEliminaModal", function (event) {

        var reporteId = $(this).data('id');
        var reporteDescripcion = $(this).data('descripcion');
        var reporteTitulo = $(this).data('titulo');
        var reporteEstado = $(this).data('estado');
        var reporteFecha = $(this).data('fecha');

        var imagenStore = $(this).data('imagenStore');

        console.log(reporteId);
        
        $("#eliminar-reporte-id").val(reporteId);
        document.getElementById('eliminar-reporte-titulo').innerHTML = reporteTitulo;
        document.getElementById('form-eliminar').action = "reportes/" + reporteId;
    });
</script>

<!--Script para editar un modal-->
<script>
    $(document).on("click", ".abrirEditaModal", function (event) {

        var reporteId = $(this).data('id');
        var reporteDescripcion = $(this).data('descripcion');
        var reporteTitulo = $(this).data('titulo');
        var reporteEstado = $(this).data('estado');
        var reporteFecha = $(this).data('fecha');

        var reporteUrlImagen = $(this).data('urlimagen');
        console.log(reporteUrlImagen);

        
        $("#editar-reporte-descripcion").val(reporteDescripcion);
        $("#editar-reporte-titulo").val(reporteTitulo);

        $("#editar-reporte-estado").val(reporteEstado);
        $("#editar-reporte-fecha").val(reporteFecha);


        
        document.getElementById('form-editar').action = "reportes/" + reporteId;
    });
    </script>

       



<!--Script para abrir el modal consultar-->
<script>
    $(document).on("click", ".abrirConsultaModal", function (event) {
        var reporteId = $(this).data('id');
        var reporteDescripcion = $(this).data('descripcion');
        var reporteTitulo = $(this).data('titulo');
        var reporteEstado = $(this).data('estado');
        var reporteFecha = $(this).data('fecha');

        var reporteUrlImagen = $(this).data('urlimagen');

        document.getElementById("consultar-reporte-descripcion").innerHTML = reporteDescripcion;
        document.getElementById("consultar-reporte-titulo").innerHTML = reporteTitulo;

        document.getElementById("consultar-reporte-fecha").innerHTML = reporteFecha;
        document.getElementById("consultar-reporte-estado").innerHTML = reporteEstado;

        document.getElementById("imagenConsulta").src = reporteUrlImagen;

        

    });
</script>


<div class="container-fluid">

            <div class="row p-5" >
                <div> 
                    <h1 class="display-1">Reporte <i class="fas fa-newspaper"></i>    </h1>
                    <h3 class="display-20">Mascotas Perdidas   </h3>
                </div>
                 

                

                
            </div>
            <div class="row p-5">
                                
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Registrar Reporte</button>

                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <td></td>
                           
                            <th >Título </th>
                      
                            <th >Estado </th>
                            <th >Fecha </th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Reporteperdidos as $reporteperdidos)
                        <tr>
                        <td>
                            <button class="btn btn-primary abrirConsultaModal" type="button" data-target="#consultarModal" 
                            data-toggle="modal"

                                    data-id="{{$reporteperdidos->id}}"
                                    data-titulo="{{$reporteperdidos->titulo}}"
                                    data-descripcion="{{$reporteperdidos->descripcion}}"
                                    data-estado="{{$reporteperdidos->estado}}"
                                    data-urlimagen="{{$reporteperdidos->urlImagen}}"
                                    data-fecha="{{$reporteperdidos->fecha}}"
                            >
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </td>
                        
                        <td>{{$reporteperdidos->titulo}}</td>   
                      
                        <td>{{$reporteperdidos->estado}}</td>
                      
                        <td>{{$reporteperdidos->fecha}}</td>

                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"
                                    data-id="{{$reporteperdidos->id}}"
                                    data-titulo="{{$reporteperdidos->titulo}}"
                                    data-descripcion="{{$reporteperdidos->descripcion}}"
                                    data-estado="{{$reporteperdidos->estado}}"
                                    data-urlimagen="{{$reporteperdidos->urlImagen}}"
                                    data-fecha="{{$reporteperdidos->fecha}}"

                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                    data-toggle="modal" data-target="#eliminarModal"
                                    data-id="{{$reporteperdidos->id}}"
                                    data-titulo="{{$reporteperdidos->titulo}}"
                                    data-descripcion="{{$reporteperdidos->descripcion}}"
                                    data-estado="{{$reporteperdidos->estado}}"
                                   
                                    data-fecha="{{$reporteperdidos->fecha}}"
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
                            <h5 class="modal-title" id="agregarModalLabel">Registrar Reporte</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/reportes" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                        <div class="modal-body">
                      
                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo1">Título: </label>
                                        <input type="text" required class="form-control" id="titulo" name="titulo">
                                </div>

                                 <div class="col-6">
                                    <label for="in_atributo3">Fecha: </label>
                                    <input type="date" required class="form-control" id="fecha" name="fecha">
                                </div>

                        <div class = "row">
                            <div class="col-5">
                                <div>
                                    Foto
                                    <input type="file" name="imagenStore" id="imagenStore">
                                </div>
                            </div>
                        </div>
                                

                            </div>

                                <div class="form-group row">

                                    <div class="col-12">
                                    <label for="in_atributo2">Descripción: </label>
                                    <textarea class="form-control" rows="5" id="descripcion" maxlength="200" name="descripcion" style="min-width: 100%"></textarea>

                                </div>
                                   

                                
                            </div>

                                >


                            <div class="form-group row ">
                                <div class="col-6">
                                        <label for="in_atributo7">Estado</label>
                                        <select class="form-control" name="estado">
                                            <option value="Abierto">Abierto</option>
                                            <option value="Cerrado">Cerrado</option>

                                            
                                        </select>
                                </div>

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
                            <h5 class="modal-title" id="consultarModalLabel">Consultar  reporte</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">  
                            <table class="table"> 
                                <tr>
                                    <td>
                                        
                                    </td>

                                    <!-- Foto de la mascota extraviada -->
                                
                                     <div class = "container" > 
                                        <img id="imagenConsulta" height="300" class="d-block " alt="..." >
                                        </div>
                                   
                                
                                    <td class="form-group">
                                        <label for="consultar-nombre" style="font-weight:bold">Titulo:</label>
                                        <p id="consultar-reporte-titulo" name="titulo"></p>
                                    </td>

                                    <td class="form-group">
                                        <label for="consultar-fecha" style="font-weight:bold">Fecha:</label>
                                        <p id="consultar-reporte-fecha" name="fecha"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group">
                                        <label for="consultar-descripcion" style="font-weight:bold">Descripción:</label>
                                        <p id="consultar-reporte-descripcion" name="descripcion"></p>
                                    </td>

                                    <td class="form-group">
                                        <label for="consultar-estado" style="font-weight:bold">Estado:</label>
                                        <p id="consultar-reporte-estado" name="estado"></p>
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

            <!-- Modal editar -->
            <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editarModalLabel">Editar </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-editar" method="POST" enctype="multipart/form-data" >
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group row ">
                                        <div class="col-6">
                                        <label for="editar-reporte-titulo">Título:</label>
                                            <input type="text" required class="form-control" id="editar-reporte-titulo" name="titulo">
                                    </div>

                                    <div class="col-6">
                                        <label for="editar-reporte-fecha">Fecha:</label>
                                        <input type="date" required class="form-control" id="editar-reporte-fecha" name="fecha">
                                    </div>
                                </div>

                                <div class = "row">
                            <div class="col-5">
                                <div>
                                    Foto
                                    <input type="file" name="imagenUpdate" id="imagenUpdate">
                                </div>
                            </div>
                        </div>

                                    <div class="form-group row">
                                        <div class="col-6">
                                        <label for="editar-reporte-descripcion-">Descripcion: </label>
                                        <input type="text" required class="form-control" id="editar-reporte-descripcion" name="descripcion">
                                        <select required class="form-control" name="estado" id="editar-reporte-estado">
                                                    @foreach ($Estados as $estados)                                  
                                                        <option value="{{$estados}}">{{$estados}} </option>
                                                    @endforeach
                                                </select>
                                        

                                    </div>

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
                                <h5 class="modal-title" id="eliminarModalLabel">Eliminar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-eliminar" method="POST">
                                    @csrf
                                    @method('DELETE')
                            <div class="modal-body">
                                ¿Estás seguro que desea eliminar <span id="eliminar-reporte-titulo"></span>? 
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