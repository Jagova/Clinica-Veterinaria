<!-- Modal editar -->
<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Editar elemento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-editar" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="editar-dueno-nombre">Nombre</label>
                            <input type="text" class="form-control" id="editar-dueno-nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="editar-dueno-apellido_paterno">Apellido Paterno</label>
                            <input type="text" required class="form-control" id="editar-dueno-apellido_paterno" name="apellido_paterno">
                    </div>
                    <div class="form-group">
                        <label for="editar-dueno-apellido_materno">Apellido Materno</label>
                            <input type="text" required class="form-control" id="editar-dueno-apellido_materno" name="apellido_materno">
                    </div>
                    <div class="form-group">
                        <label for="editar-dueno-telefono">Teléfono</label>
                            <input type="number" maxlength="10" required class="form-control" id="editar-dueno-telefono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="editar-dueno-direccion">Dirección</label>
                        <input type="text" required class="form-control" id="editar-dueno-direccion" name="direccion">
                    </div>
                    <div class="form-group">
                        <label for="editar-dueno-celular">Celular</label>
                            <input type="number" maxlength="10" class="form-control" id="editar-dueno-celular" name="celular">
                    </div>
                    <div class="form-group">
                        <label for="editar-dueno-correo">Correo</label>
                            <input type="email" required class="form-control" id="editar-dueno-correo" name="correo">
                    </div>
                    <div class="form-group">
                        <label for="editar-dueno-rfc">RFC</label>
                            <input type="text" maxlength="13" class="form-control" id="editar-dueno-rfc" name="rfc">
                    </div>
                    <div class="form-group">
                    <label for="in_atributo1">Código Postal</label>
                        <input type="number" maxlength="5" required class="form-control" id="editar-dueno-codigo_postal" name="codigo_postal">
                </div>
                    <div class="form-group">
                        <label for="editar-dueno-razon_social">Razón Social</label>
                            <input type="text" class="form-control" id="editar-dueno-razon_social" name="razon_social">
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