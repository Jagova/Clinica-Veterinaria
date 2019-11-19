<!-- Modal editar -->
<div class="modal fade" id="editarContraseñaModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Editar <span id="editarmo-doctor-nombre1"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-editar-contraseña" method="POST">
                @csrf
                @method('POST')
                <div class="modal-body">                          
                <div class="form-group row">
                        <div class="col-6">
                            <label for="in_atributo2">Contraseña</label>
                            <input type="password" required class="form-control" id="password" name="password">        
                    </div>
                    <div class="col-6">
                            <label for="in_atributo2">Confirmar contraseña</label>
                            <input type="password" required class="form-control" id="confirmapassword" name="confirmapassword">        
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