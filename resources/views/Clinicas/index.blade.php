@extends('layout')

@section('contenido')

<h1>Clinicas</h1>


<table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Dirección</th>
             </tr>
        </thead>
        <tbody>
    @foreach($Clinicas as $clinica)
    <tr>
        <td>{{$clinica->id}}</td>
        <td>{{$clinica->nombre}}</td>   
        <td>{{$clinica->direccion}}</td>   
    </tr>  
    @endforeach
    </tbody>
</table>

<button> <a href="clinicas/create">Crear clínica</a></button>



       
<div class="container-fluid">
            <div class="row p-5"><h1 class="display-1">Clínica Veterinaria</h1></div>
            
            <div class="row p-5">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarModal">
                    Agregar
                </button>
                                    



                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th >ATRIBUTO1</th>
                            <th >ATRIBUTO2</th>
                            <th >ATRIBUTO3</th>
                            <th>ACCIONES</th>
                        </tr>

                    </thead>
                    
                    <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Acciones">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificarModal">Modificar</button>
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#eliminarModal">Eliminar</button>
                                            
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Acciones">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificarModal">Modificar</button>
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#eliminarModal">Eliminar</button>
                                                
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Acciones">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificarModal">Modificar</button>
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#eliminarModal">Eliminar</button>
                                            
                                    </div>
                                </td>
                            </tr>
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
                                Estás seguro de eliminar el elemento?
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