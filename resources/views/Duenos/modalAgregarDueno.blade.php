<!-- Modal Agregar -->
<div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarModalLabel">Agregar dueño</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/duenos" method="POST">
                @csrf
                @method('POST')
            <div class="modal-body">                          
                <div class="form-group row">
                    <div class="col-6">
                        <label for="in_atributo1">Nombre</label>
                            <input type="text" required class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="col-6">
                        <label for="in_atributo1">Apellido Paterno</label>
                            <input type="text" required class="form-control" id="apellido_paterno" name="apellido_paterno">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="in_atributo1">Apellido Materno</label>
                            <input type="text" required class="form-control" id="apellido_materno" name="apellido_materno">
                    </div>
                    <div class="col-6">
                        <label for="in_atributo1">Teléfono</label>
                            <input type="number" maxlength="10" required class="form-control" id="telefono" name="telefono">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="in_atributo2">Dirección</label>
                        <input type="text" required class="form-control" id="direccion" name="direccion">
                    </div>
                    <div class="col-6">
                        <label for="in_atributo1">Celular</label>
                            <input type="number" maxlength="10" required class="form-control" id="celular" name="celular">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="in_atributo1">Correo</label>
                            <input type="email" maxlength="100" required class="form-control" id="correo" name="email">
                    </div>
                    <div class="col-6">
                        <label for="in_atributo1">RFC</label>
                            <input type="text" maxlength="13" required class="form-control" id="rfc" name="rfc" style="text-transform: uppercase">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="in_atributo1">Código Postal</label>
                            <input type="number" maxlength="5" required class="form-control" id="codigp_postal" name="codigo_postal">
                    </div>
                    <div class="col-6">
                        <label for="in_atributo1">Razón Social</label>
                            <input type="text" required class="form-control" id="razon_social" name="razon_social">
                    </div>
                </div>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </form>
        </div>
    </div>
</div>
