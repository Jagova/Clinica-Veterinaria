@extends('layout')

@section('contenido')


<script>
$(document).on("click", ".abrirEliminaModal", function (event) {
    var medicinaNombre = $(this).data('nombre');
    var medicinaId = $(this).data('id');
    var presentacion = $(this).data('presentacion');
    var ml_mg = $(this).data('ml_mg');
    var compuesto = $(this).data('compuesto');
    var precio = $(this).data('precio');
    var laboratorio = $(this).data('laboratorio');
    var paq_unidad = $(this).data('paq_unidad');
    var controlado = $(this).data('controlado');
    var fecha_caducidad = $(this).data('fecha_caducidad');
    var stock = $(this).data('stock');


$("#eliminar-clinica-id").val(medicinaId);
    document.getElementById('eliminar-nombre-m').innerHTML = medicinaNombre;
    document.getElementById('form-eliminar').action = "medicamentos/" + medicinaId;
});
</script>

<!--Script para editar un modal-->
<script>
    $(document).on("click", ".abrirEditaModal", function (event) {
    
    var medicinaId = $(this).data('id');

    var medicinaNombre = $(this).data('nombre');
    var presentacion = $(this).data('presentacion');

    var ml_mg = $(this).data('ml_mg');
    var compuesto = $(this).data('compuesto');

    var precio = $(this).data('precio');
    var laboratorio = $(this).data('laboratorio');

    var paq_unidad = $(this).data('paq_unidad');
    var controlado = $(this).data('controlado');

    var fecha_caducidad = $(this).data('fecha_caducidad');
    var stock = $(this).data('stock');

        $("#editar-m-nombre").val(medicinaNombre);
        $("#editar-m-presentacion").val(presentacion);

        $("#editar-m-mlmg").val(ml_mg);
        $("#editar-m-compuesto").val(compuesto);

        $("#editar-m-precio").val(precio);
        $("#editar-m-laboratorio").val(laboratorio);

        $("#editar-m-paqunidad").val(paq_unidad);
        $("#editar-m-controlado").val(controlado);

        $("#editar-m-fechcad").val(fecha_caducidad);
        $("#editar-m-stock").val(stock);
        
        document.getElementById('form-editar').action = "medicamentos/" + medicinaId;
    });
    </script>

       
<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Inventario <i class="fas fa-boxes"></i> </h1>
                <h1>Medicamentos</h1>
            </div>

            <div class="row p-5">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Crear Medicamento</button>
                <table class="table" id="table1">
                    <thead>
                        <tr>
                
                            <th >Id </th>
                            <th >Nombre </th>
                            <th >Presentacion </th>
                            <th >ML MG </th>
                            <th >Compuesto </th>
                            <th >Precio </th>
                            <th >Laboratorio </th>
                            <th >Paq Unidad </th>
                            <th >Controlado </th>
                            <th >Fecha </th>
                            <th >Stock </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($Medis as $medis)
                        <tr>
                        <td>{{$medis->id}}</td>
                        <td>{{$medis->nombre}}</td>   
                        <td>{{$medis->presentacion}}</td>
                        <td>{{$medis->ml_mg}}</td>
                        <td>{{$medis->compuesto}}</td>
                        <td>{{$medis->precio}}</td>
                        <td>{{$medis->laboratorio}}</td>
                        <td>{{$medis->paq_unidad}}</td>
                        <td>{{$medis->controlado}}</td>
                        <td>{{$medis->fecha_caducidad}}</td>
                        <td>{{$medis->stock}}</td>
                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"

                                    data-id="{{$medis->id}}"
                                    data-nombre="{{$medis->nombre}}"
                                    data-presentacion="{{$medis->presentacion}}"
                                    data-ml_mg="{{$medis->ml_mg}}"
                                    data-compuesto="{{$medis->compuesto}}"
                                    data-precio="{{$medis->precio}}"
                                    data-laboratorio="{{$medis->laboratorio}}"
                                    data-paq_unidad="{{$medis->paq_unidad}}"
                                    data-controlado="{{$medis->controlado}}"
                                    data-fecha_caducidad="{{$medis->fecha_caducidad}}"
                                    data-stock="{{$medis->stock}}"

                                    >Modificar <i class="fas fa-pencil-alt"></i> </button>

                                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                    data-toggle="modal" data-target="#eliminarModal"
                                    data-id="{{$medis->id}}"
                                    data-nombre="{{$medis->nombre}}"
                                    data-presentacion="{{$medis->presentacion}}"
                                    data-ml_mg="{{$medis->ml_mg}}"
                                    data-compuesto="{{$medis->compuesto}}"
                                    data-precio="{{$medis->precio}}"
                                    data-laboratorio="{{$medis->laboratorio}}"
                                    data-paq_unidad="{{$medis->paq_unidad}}"
                                    data-controlado="{{$medis->controlado}}"
                                    data-fecha_caducidad="{{$medis->fecha_caducidad}}"
                                    data-stock="{{$medis->stock}}"

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
                            <h5 class="modal-title" id="agregarModalLabel">Crear Medicamento: </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/medicamentos" method="POST">
                            @csrf
                            @method('POST')
                        <div class="modal-body">                          
                                <div class="form-group">
                                    <label for="in_atributo1">Nombre: </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="in_atributo2">Presentacion: </label>
                                    <input type="text" class="form-control" id="presentacion" name="presentacion">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo3">ML MG: </label>
                                    <input type="text" class="form-control" id="ml_mg" name="ml_mg">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Compuesto: </label>
                                    <input type="text" class="form-control" id="compuesto" name="compuesto">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Precio: </label>
                                    <input type="text" class="form-control" id="precio" name="precio">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Laboratorio: </label>
                                    <input type="text" class="form-control" id="laboratorio" name="laboratorio">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Paq Unidad: </label>
                                    <input type="text" class="form-control" id="paq_unidad" name="paq_unidad">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Controlado: </label>
                                    <input type="text" class="form-control" id="controlado" name="controlado">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Fecha Caducidad: </label>
                                    <input type="text" class="form-control" id="fecha_caducidad" name="fecha_caducidad">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Stock: </label>
                                    <input type="text" class="form-control" id="stock" name="stock">
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
                                <h5 class="modal-title" id="editarModalLabel">Editar Medicamento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-editar" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">

                                <div class="form-group">
                                    <label for="in_atributo1">Nombre: </label>
                                        <input type="text" class="form-control" id="editar-m-nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="in_atributo2">Presentacion: </label>
                                    <input type="text" class="form-control" id="editar-m-presentacion" name="presentacion">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo3">ML MG: </label>
                                    <input type="text" class="form-control" id="editar-m-mlmg" name="ml_mg">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Compuesto: </label>
                                    <input type="text" class="form-control" id="editar-m-compuesto" name="compuesto">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Precio: </label>
                                    <input type="text" class="form-control" id="editar-m-precio" name="precio">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Laboratorio: </label>
                                    <input type="text" class="form-control" id="editar-m-laboratorio" name="laboratorio">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Paq Unidad: </label>
                                    <input type="text" class="form-control" id="editar-m-paqunidad" name="paq_unidad">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Controlado: </label>
                                    <input type="text" class="form-control" id="editar-m-controlado" name="controlado">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Fecha Caducidad: </label>
                                    <input type="text" class="form-control" id="editar-m-fechcad" name="fecha_caducidad">
                                </div>

                                <div class="form-group">
                                    <label for="in_atributo2">Stock: </label>
                                    <input type="text" class="form-control" id="editar-m-stock" name="stock">
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
                                <h5 class="modal-title" id="eliminarModalLabel">Eliminar Medicina</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-eliminar" method="POST">
                                    @csrf
                                    @method('DELETE')
                            <div class="modal-body">
                                ¿Estás seguro que desea eliminar Medicina <span id="eliminar-nombre-m"></span>? 
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