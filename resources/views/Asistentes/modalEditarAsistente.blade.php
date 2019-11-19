<!-- Modal editar -->
<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">
                        <div class="modal-body">
                               Editando asistente
                             </div></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-editar" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">                          
                <div class="form-group row">
                        <div class="col-12">
                                <label for="editar-asistente-nombre1">Primer nombre</label>
                                <input type="text" class="form-control" id="editar-asistente-nombre1" name="nombre1" required>        
                        </div>
                       
                    </div>
                <div class="form-group row">
                    <div class="col-6">
                            <label for="editar-asistente-apellido1">Apellido Paterno</label>
                            <input type="text" class="form-control" id="editar-asistente-apellido1" name="ApPaterno" required>        
                    </div>
                    <div class="col-6">
                            <label for="editar-asistente-apellido2">Apellido Materno</label>
                            <input type="text" class="form-control" id="editar-asistente-apellido2" name="ApMaterno" required>        
                    </div>
                </div>
                <div class = "row">
                    <div class="col-5">
                            <div>
                                    Foto
                                    <input type="file" name="imagen" id="editar-asistente-imagen">
                                </div>
                    </div>
                </div>
               
                <div class="form-group row">
                    <div class="col-6">
                            <label for="editar-asistente-correo">Correo</label>
                            <input type="email" class="form-control" id="editar-asistente-correo" name="correo" required>        
                    </div>
                    <div class="col-6">
                            <label for="editar-asistente-telefono">Telefono</label>
                            <input class="form-control" id="editar-asistente-telefono" name="telefono" required input type="tel"  min="7" max="10"onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                         </div>
            </div>
                <div class="form-group">
                        <label for="editar-asistente-clinica">Clínica</label>
                        <select class="form-control" name="clinica" id="editar-asistente-clinica">
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