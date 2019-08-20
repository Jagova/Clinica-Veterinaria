        <!-- Font Awesome Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@extends('layout')

@section('contenido')


       
<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Cli­nicas <i class="fas fa-hospital"></i> </h1></div>

            <div class="row p-5">
               
                <!--
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarModal">
                <i class="fas fa-plus"></i>
                    Agregar
                </button>-->

                <a class="btn btn-primary" href="clinicas/create"><i class="fas fa-plus"></i> Crear cli­nica</a>
                                    



                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th >Id</th>
                            <th >Nombre</th>
                            <th >Direccion</th>
                            <th></th>
                        </tr>

                    </thead>
                    
                    <tbody>

                        @foreach ($Clinicas as $clinica)
                        <tr>
                        <td>{{$clinica->id}}</td>
                        <td>{{$clinica->nombre}}</td>   
                        <td>{{$clinica->direccion}}</td>
                        <td>
                                <div class="btn-group" role="group" aria-label="Acciones"> 
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificarModal">Modificar <i class="fas fa-pencil-alt"></i> </button>
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#eliminarModal">Eliminar <i class="fas fa-trash-alt"></i></button>
                                        
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
                            <h5 class="modal-title" id="agregarModalLabel">Agregar elemento</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="in_atributo1">Atributo1</label>
                                        <input type="text" class="form-control" id="in_atributo1">
                                </div>
                                <div class="form-group">
                                    <label for="in_atributo2">Atributo2</label>
                                    <input type="text" class="form-control" id="in_atributo2">
                                </div>
                                <div class="form-group">
                                    <label for="in_atributo3">Atributo3</label>
                                    <input type="text" class="form-control" id="in_atributo3">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Modificar -->
            <div class="modal fade" id="modificarModal" tabindex="-1" role="dialog" aria-labelledby="modificarModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modificarModalLabel">Editar elemento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="in_atributo1">Atributo1</label>
                                            <input type="text" class="form-control" id="in_atributo1">
                                    </div>
                                    <div class="form-group">
                                        <label for="in_atributo2">Atributo2</label>
                                        <input type="text" class="form-control" id="in_atributo2">
                                    </div>
                                    <div class="form-group">
                                        <label for="in_atributo3">Atributo3</label>
                                        <input type="text" class="form-control" id="in_atributo3">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- Modal Eliminarr -->
            <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="eliminarModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="eliminarModalLabel">Eliminar elemento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                EstÃ¡s seguro de eliminar el elemento?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Eliminar</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

@endsection