   <!-- Modal editar -->
   <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Editando doctor <span id="editarmo-doctor-nombre1"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-editar" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">                          
                <div class="form-group row">
                        <div class="col-12">
                                <label for="editar-doctor-nombre1">Nombre</label>
                                <input type="text" required class="form-control" id="editar-doctor-nombre1" name="nombre1">        
                        </div>
                        
                    </div>
                <div class="form-group row">
                    <div class="col-6">
                            <label for="editar-doctor-apellido1">Apellido Paterno</label>
                            <input type="text" required class="form-control" id="editar-doctor-apellido1" name="ApPaterno">        
                    </div>
                    <div class="col-6">
                            <label for="editar-doctor-apellido2">Apellido Materno</label>
                            <input type="text" required class="form-control" id="editar-doctor-apellido2" name="ApMaterno">        
                    </div>
                </div>
                <div class = "row">
                        <div class="col-5">
                            <div>
                                Foto
                                <input type="file" name="imagen" id="editar-doctor-imagen">
                            </div>
                        </div>
                    </div>
                <div class="form-group row">
                        <div class="col-6">
                                <label for="editar-doctor-especialidad1">Especialidad 1</label>
                                <input type="text" required class="form-control" id="editar-doctor-especialidad1" name="esp1">        
                        </div>
                        <div class="col-6">
                                <label for="editar-doctor-especialidad2">Especialidad 2</label>
                                <input type="text" required class="form-control" id="editar-doctor-especialidad2" name="esp2">        
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