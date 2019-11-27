            <!-- Modal Eliminar -->
            <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="eliminarModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="eliminarModalLabel">Eliminar doctor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="form-eliminar" method="POST">
                                @csrf
                                @method('DELETE')
                        <div class="modal-body">
                            ¿Estás seguro de eliminar el doctor <b><span id="eliminar-doctor-nombre"></b></span>? 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> 
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </div>
                        </form>
                    </div>
                </div>
        </div> 