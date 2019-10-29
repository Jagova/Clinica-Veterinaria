@extends('layout')

@section('contenido')


<script>
$(document).on("click", ".abrirEliminaModal", function (event) {
    var doctorClinica = $(this).data('clinica');
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
    var doctorClinica = $(this).data('clinica');
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

    <!--Script para abrir el modal consultar-->
<script>
    $(document).on("click", ".abrirConsultaModal", function (event) {
        var doctorClinica = $(this).data('clinica');
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

    document.getElementById("consultar-m-nombre").innerHTML = medicinaNombre;
    document.getElementById("consultar-m-presentacion").innerHTML = presentacion;

    document.getElementById("consultar-m-mlmg").innerHTML = ml_mg;
    document.getElementById("consultar-m-compuesto").innerHTML = compuesto;

    document.getElementById("consultar-m-precio").innerHTML = precio;
    document.getElementById("consultar-m-laboratorio").innerHTML = laboratorio;

    document.getElementById("consultar-m-paqunidad").innerHTML = paq_unidad;
    document.getElementById("consultar-m-controlado").innerHTML = controlado;

    document.getElementById("consultar-m-fechcad").innerHTML = fecha_caducidad
    document.getElementById("consultar-m-stock").innerHTML = stock;
    });
</script>

       
<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Inventario 
                <i class="fas fa-dolly-flatbed"></i> &nbsp
            </h1>

            @include('Medicamentos.areaLinks')

            </div>

            <div class="row p-4">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i> Crear Medicamento</button>
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            
<!--                            <th >Id </th> -->
                            <th >Nombre </th>
                            <th >Presentacion </th>
<!--                            <th >ML MG </th>
                            <th >Compuesto </th>-->
                            <th >Precio </th>
                            <th >Laboratorio </th>
                            <th >Paq Unidad </th>
<!--                            <th >Controlado </th>
                            <th >Fecha </th>
                            <th >Stock </th>-->
                            <th >Clinica </th> 
                            <th> Imagen </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($Medicamentos as $medis)
                        <tr>
                        <td>
                            <button class="btn btn-primary abrirConsultaModal" type="button" data-target="#consultarModal" 
                            data-toggle="modal"
                            data-id="{{$medis->id}}" data-nombre="{{$medis->nombre}}"
                                    data-presentacion="{{$medis->presentacion}}" data-ml_mg="{{$medis->ml_mg}}"
                                    data-compuesto="{{$medis->compuesto}}"data-precio="{{$medis->precio}}"
                                    data-laboratorio="{{$medis->laboratorio}}"data-paq_unidad="{{$medis->paq_unidad}}"
                                    data-controlado="{{$medis->controlado}}"
                                    data-fecha_caducidad="{{$medis->fecha_caducidad}}"
                                    data-stock="{{$medis->stock}}"data-clinica="{{$medis->clinica_id}}"
                            >
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </td>
                    <!--    <td>{{$medis->id}}</td>-->
                        <td>{{$medis->nombre}}</td>   
                        <td>{{$medis->presentacion}}</td>
               <!--         <td>{{$medis->ml_mg}}</td>
                        <td>{{$medis->compuesto}}</td>-->
                        <td>{{$medis->precio}}</td>
                        <td>{{$medis->laboratorio}}</td>
                        <td>{{$medis->paq_unidad}}</td>
                   <!--     <td>{{$medis->controlado}}</td>
                        <td>{{$medis->fecha_caducidad}}</td>
                        <td>{{$medis->stock}}</td>-->
                        <td>{{$medis->Clinica->nombre}}</td>
                        <td><img  src="{{URL::asset($medis->urlImagen)}}" height="300" class="d-block w-100" alt="..."></td>
                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary mx-2 abrirEditaModal" data-toggle="modal" 
                                    data-target="#editarModal"

                                    data-id="{{$medis->id}}" data-nombre="{{$medis->nombre}}"
                                    data-presentacion="{{$medis->presentacion}}" data-ml_mg="{{$medis->ml_mg}}"
                                    data-compuesto="{{$medis->compuesto}}"data-precio="{{$medis->precio}}"
                                    data-laboratorio="{{$medis->laboratorio}}"data-paq_unidad="{{$medis->paq_unidad}}"
                                    data-controlado="{{$medis->controlado}}"
                                    data-fecha_caducidad="{{$medis->fecha_caducidad}}"
                                    data-stock="{{$medis->stock}}"data-clinica="{{$medis->clinica_id}}"

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
                                    data-clinica="{{$medis->clinica}}"

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
                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo1">Nombre: </label>
                                        <input type="text" required class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo2">Presentacion: </label>
                                    <select  type="text" requied class="form-control" id="presentacion" name="presentacion">
                                        <option>Comprimido</option>
                                        <option>Cápsula</option>
                                        <option>Liquido Oral</option>
                                        <option>Inyectable</option>
                                        <option>Crema</option>
                                        <option>Solución</option>
                                        <option>Aerosol</option>
                                    </select>
                                </div>


                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo3">ML MG: </label>
                                    <input type="number" step="any" min="0"  required class="form-control" id="ml_mg" name="ml_mg">
                                </div>

                                <div class="col-6">
                                    <label for="in_atributo2">Compuesto: </label>
                                    <input type="text" required class="form-control" id="compuesto" name="compuesto">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo2">Precio: </label>
                                    <input type="number" min="0"  required class="form-control" id="precio" name="precio">
                                </div>

                                <div class="col-6">
                                    <label for="in_atributo2">Laboratorio: </label>
                                    <input type="text" required class="form-control" id="laboratorio" name="laboratorio">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-3">
                                    <label for="in_atributo2">Paq Unidad: </label>
                                    <input type="number" min="1"  required class="form-control" id="paq_unidad" name="paq_unidad">
                                </div>

                                <div class="col-3">
                                    <label for="in_atributo2">Controlado: </label><br>
                                    <select  type="text" requied class="form-control" id="controlado" name="controlado">
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>

                                    <!--<input type="text" required class="form-control" id="controlado" name="controlado">-->
                                </div>

                                                                <div class="col-6">
                                    <label for="in_atributo2">Stock: </label>
                                    <input type="number" min="1" max="1000" required class="form-control" id="stock" name="stock">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo2">Fecha Caducidad: </label>
                                    <input type="date" required class="form-control" id="fecha_caducidad" name="fecha_caducidad">
                                </div>


                                                      <div class="col-6">
                                        <label for="in_atributo9">Clinica</label>
                                        <select class="form-control" name="clinica">
                                            @foreach ($Clinicas as $clinica)                                  
                                                <option value="{{$clinica->id}}">{{$clinica->nombre}}</option>
                                            @endforeach
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
                            <h5 class="modal-title" id="consultarModalLabel">Consultar medicamento</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">  
                            <table class="table"> 
                                <tr>
                                    <td class="form-group">
                                        <label for="in_atributo1" style="font-weight:bold">Nombre: </label>
                                        <p id="consultar-m-nombre" name="nombre"></p>
                                    </td>
                                    <td class="form-group">
                                        <label for="in_atributo2" style="font-weight:bold">Presentacion: </label>
                                        <p id="consultar-m-presentacion" name="presentacion"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group">
                                        <label for="in_atributo3" style="font-weight:bold">ML MG: </label>
                                        <p id="consultar-m-mlmg" name="ml_mg"></p>
                                    </td>

                                    <td class="form-group">
                                        <label for="in_atributo2" style="font-weight:bold">Compuesto: </label>
                                        <p id="consultar-m-compuesto" name="compuesto"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group">
                                        <label for="in_atributo2" style="font-weight:bold">Precio: </label>
                                        <p id="consultar-m-precio" name="precio"></p>
                                    </td>

                                    <td class="form-group">
                                        <label for="in_atributo2" style="font-weight:bold">Laboratorio: </label>
                                        <p id="consultar-m-laboratorio" name="laboratorio"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group">
                                        <label for="in_atributo2" style="font-weight:bold">Paq Unidad: </label>
                                        <p id="consultar-m-paqunidad" name="paq_unidad"></p>
                                    </td>

                                    <td class="form-group">
                                        <label for="in_atributo2" style="font-weight:bold">Controlado: </label>
                                        <p  id="consultar-m-controlado" name="controlado"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group">
                                        <label for="in_atributo2" style="font-weight:bold">Stock: </label>
                                        <p id="consultar-m-stock" name="stock"></p>
                                    </td>
                                    <td class="form-group">
                                        <label for="in_atributo2" style="font-weight:bold">Fecha Caducidad: </label>
                                        <p id="consultar-m-fechcad" name="fecha_caducidad"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group">
                                        <label for="consultar-doctor-clinica" style="font-weight:bold">Clínica</label>
                                        <p name="clinica" id="consultar-doctor-clinica"></p>
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
                                <h5 class="modal-title" id="editarModalLabel">Editar Medicamento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-editar" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo1">Nombre: </label>
                                        <input type="text" required class="form-control" id="editar-m-nombre" name="nombre">
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo2">Presentacion: </label>
                                    <select  type="text" requied class="form-control" id="editar-m-presentacion" name="presentacion">
                                        <option>Comprimido</option>
                                        <option>Cápsula</option>
                                        <option>Liquido Oral</option>
                                        <option>Inyectable</option>
                                        <option>Crema</option>
                                        <option>Solución</option>
                                        <option>Aerosol</option>
                                    </select>


                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo3">ML MG: </label>
                                    <input type="number" min="1" max="1000"  required class="form-control" id="editar-m-mlmg" name="ml_mg">
                                </div>

                                <div class="col-6">
                                    <label for="in_atributo2">Compuesto: </label>
                                    <input type="text" required class="form-control" id="editar-m-compuesto" name="compuesto">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo2">Precio: </label>
                                    <input type="number" min="1" max="1000"  required class="form-control" id="editar-m-precio" name="precio">
                                </div>

                                <div class="col-6">
                                    <label for="in_atributo2">Laboratorio: </label>
                                    <input type="text" required class="form-control" id="editar-m-laboratorio" name="laboratorio">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-3">
                                    <label for="in_atributo2">Paq Unidad: </label>
                                    <input type="number" min="1" max="1000"  required class="form-control" id="editar-m-paqunidad" name="paq_unidad">
                                </div>

                                <div class="col-3">
                                    <label for="in_atributo2">Controlado: </label>
                            <!--        <input type="text" required class="form-control" id="editar-m-controlado" name="controlado">-->
                                    <select  type="text" requied class="form-control" id="editar-m-controlado" name="controlado">
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>
                                </div>


                                <div class="col-6">
                                    <label for="in_atributo2">Stock: </label>
                                    <input type="number" min="1" max="1000"  required class="form-control" id="editar-m-stock" name="stock">
                                </div>



                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo2">Fecha Caducidad: </label>
                                    <!--<input type="date" required class="form-control" id="editar-m-fechcad" name="fecha_caducidad">-->
                                     <input type="date" required class="form-control" id="editar-m-fechcad" name="fecha_caducidad"
                                      min="2019-01-01" max="2025-12-31">
                                </div>

                                 <div class="col-6">
                                    <label for="editar-doctor-clinica">Clínica</label>
                                    <select class="form-control" name="clinica" id="editar-doctor-clinica">
                                        @foreach ($Clinicas as $clinica)                                  
                                                <option value="{{$clinica->id}}">{{$clinica->nombre}}</option>
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