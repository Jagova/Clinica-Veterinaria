@extends('control.layout')

@section('contenido')
<script>
$(document).on("click", ".abrirEliminaModal", function (event) {
    var citaId = $(this).data('id');
});
</script>
<div class="container-fluid">
    <div class="row justify-content-center m-3">
        <h1 class="mx-auto">Citas</h1>
    </div>

    <div class="row shadow-lg mx-md-5 p-3">
        <table class="w-100 h-100">
        @foreach ($ocupados as $cita)
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Servicio</th>
                <th>Dueno</th>
                <th>Mascota</th>
                <th></th>
            </tr>
            <tr>
                <td>
                    <p id="num" name="num">{{$cita->id}}</p>
                </td>
                <td>
                    <p id="fecha" name="fecha">{{$cita->fecha}}</p>
                </td>

                <td>
                    <p id="servicio" name="servicio">{{$cita->servicio_id}}</p>
                </td>
                <td>
                    <p id="dueno" name="dueno">{{$cita->dueno}}</p>
                </td>
                <td>
                    <p id="mascota" name="mascota">{{$cita->mascota}}</p>
                </td>
                <td>
                    <button type="button" class="btn btn-danger abrirEliminaModal"
                                    data-toggle="modal" data-target="#eliminarModal"
                                    data-id="{{$cita->id}}"
                                    >Eliminar <i class="fas fa-trash-alt"></i> </button>
                                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

 <!-- Modal Eliminar -->
 <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="eliminarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminarModalLabel">Eliminar cita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-eliminar" method="POST">
                    @csrf
                    @method('DELETE')
            <div class="modal-body">
                ¿Estás seguro de eliminar la cita? 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection