  <!-- Modal Agregar -->
  <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarModalLabel">Agregar asistente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/asistentes" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                <div class="modal-body">                          
                        <div class="form-group row">
                                <div class="col-6">
                                        <label for="in_atributo2">Primer nombre</label>
                                        <input type="text" class="form-control" id="nombre1" name="nombre1"  >        
                                </div>
                                <div class="col-6">
                                        <label for="in_atributo2">Segundo nombre</label>
                                        <input type="text" class="form-control {{$errors->has('title')?'is-danger':''}}"     id="direccion" name="nombre2" value="{{old('direccion')}}" required >        
                                </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-6">
                                    <label for="in_atributo2">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="direccion" name="ApPaterno" requiredon keypress='return (event.charCode >= 65 && event.charCode <= 90)&&(event.charCode >= 65 && event.charCode <= 90)'>        
                            </div>
                            <div class="col-6">
                                    <label for="in_atributo2">Apellido Materno</label>
                                    <input type="text" class="form-control" id="direccion" name="ApMaterno" required>        
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-5">
                                <div>
                                    Fotografía
                                    <input type="file" name="imagen" id=imagen>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <div class="col-6">
                                    <label for="editar-asistente-especialidad1">Correo electrónico</label>
                                    <input type="email" class="form-control" id="correo" name="correo" required>        
                            </div>
                            <div class="col-6">
                                    <label for="editar-asistente-especialidad2">Telefono</label>
                                    <input class="form-control" id="telefono" name="telefono" required input type="tel"  min="10" max="10"onkeypress='return event.charCode >= 48 && event.charCode <= 57'>        
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
   