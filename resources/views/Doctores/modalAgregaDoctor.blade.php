            
            <!-- Modal Agregar -->
            <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="agregarModalLabel">Agregar doctor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/doctores" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                        <div class="modal-body">                          
                                <div class="form-group row">
                                        <div class="col-12">
                                                <label for="in_atributo2">Primer nombre</label>
                                                <input type="text" required class="form-control" id="nombre1" name="nombre1">        
                                        </div>
                                       
                                    </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                            <label for="in_atributo2">Apellido Paterno</label>
                                            <input type="text" required class="form-control" id="direccion" name="ApPaterno">        
                                    </div>
                                    <div class="col-6">
                                            <label for="in_atributo2">Apellido Materno</label>
                                            <input type="text" required class="form-control" id="direccion" name="ApMaterno">        
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
                                <div class="form-group row">
                                        <div class="col-6">
                                                <label for="in_atributo2">Especialidad 1</label>
                                                <input type="text" required class="form-control" id="direccion" name="esp1">        
                                        </div>
                                        <div class="col-6">
                                                <label for="in_atributo2">Especialidad 2</label>
                                                <input type="text" required class="form-control" id="direccion" name="esp2">        
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="in_atributo1">Clinica</label>
                                        <select class="form-control" name="clinica">
                                            @foreach ($Clinicas as $clinica)                                  
                                                <option value="{{$clinica->id}}">{{$clinica->nombre}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                            <label for="in_atributo2">Correo electrónico</label>
                                            <input type="email" required class="form-control" id="email" name="email">        
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