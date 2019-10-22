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
                    <form id="form-editar" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">                          
                                <div class="form-group">
                                    <div class = "row">
                                        <div class = "col-6" >
                                            <label for="in_atributo1">Nombre</label>
                                            <input type="text" required class="form-control" id="editar-paciente-nombre" name="nombre">
                                        </div>
                                        <div class = "col-6" >
                                            <label for="in_atributo2">Edad</label>
                                            <input required class="form-control" id="editar-paciente-edad" name="edad" type="edad"  min="1" max="3"onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class="col-5">
                                            <div>
                                                Foto
                                                <input type="file" name="imagen" id="editar-paciente-imagen">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class = "row">
                                            <div class = "col-6" >
                                                <label for="in_atributo3">Especie</label>
                                                <select required class="form-control" id = "editar-paciente-especie" name="especie">
                                                    @foreach ($Especies as $especie)                                  
                                                        <option value="{{$especie}}">{{$especie}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class = "col-6" >
                                                <label for="in_atributo4">Raza</label>
                                                <input type="text" required class="form-control" id="editar-paciente-raza" name="raza">
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label for="in_atributo6">Dueño</label>
                                    <select required class="form-control" id="editar-paciente-duenio-id" name="duenio_id">
                                        @foreach ($Duenios as $duenio)                                  
                                        <option value="{{$duenio->id}}">{{$duenio->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="in_atributo7">Doctor favorito</label>
                                    <select class="form-control" id="editar-paciente-doctor-id" name="doctor_id">
                                            @foreach ($Doctores as $doctor)                                  
                                                <option value="{{$doctor->id}}">{{$doctor->primer_nombre}}</option>
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