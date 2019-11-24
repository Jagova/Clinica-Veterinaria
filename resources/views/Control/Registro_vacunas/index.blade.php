@extends('control.layout')

@section('contenido')

   
<div class="container-fluid">

<div class="row justify-content-center m-3">
        <h1 class="mx-auto">Historial de vacunas</h1>
    </div>
    <div class="row justify-content-center">
        <h5 class="mr-2">Mascota: </h5>
        <p>Loki</p>
        <h5 class="ml-5 mr-2">Dueño: </h5>
        <p>Tiffany Cortez</p>
    </div>
    <div class="row shadow-lg mx-md-5 p-3">
        <table class="w-100 h-100">
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Vacuna</th>
                <th>Siguiente Aplicación</th>
            </tr>
            <tr>
                <td>
                    <p id="num" name="num">1</p>
                </td>
                <td>
                    <p id="fecha" name="fecha">01/01/2019</p>
                </td>

                <td>
                    <p id="vacuna" name="vacuna">Rabia</p>
                </td>
                <td>
                    <p id="fecha_siguiente" name="fecha_siguiente">01/01/2020</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p id="num" name="num">1</p>
                </td>
                <td>
                    <p id="fecha" name="fecha">01/01/2019</p>
                </td>

                <td>
                    <p id="vacuna" name="vacuna">Polivalente</p>
                </td>
                <td>
                    <p id="fecha_siguiente" name="fecha_siguiente">01/01/2020</p>
                </td>
            </tr>
        </table>
    </div>
    
    <div class="col-6 ml-auto">
                <button class="btn btn-primary text-white" data-toggle="modal" data-target="#agregarModal"><i class="fas fa-plus"></i>Registrar Vacuna</button>
                

            
    </div>
                

</div>

   <!-- Modal Registrar -->
   <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarModalLabel">Registrar Vacuna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/pacientes" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
            <div class="modal-body">                          
                    <div class="form-group">
                        <div class = "row">
                            <div class = "col-6" >
                                
                            </div>
                            <div class = "col-6" >
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-5">
                                <div>
                                    Foto
                                    <input type="file" name="imagen" id="imagen">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <div class = "row">
                                <div class = "col-6" >
                                    
                                </div>
                                <div class = "col-6" >
                                    <label for="in_atributo4">Raza</label>
                                    <input type="text" required class="form-control" id="raza" name="raza">
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="in_atributo6">Dueño</label>
                        
                    </div>
                    <div class="form-group">
                        <label for="in_atributo7">Doctor favorito</label>
                        
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
    
@endsection