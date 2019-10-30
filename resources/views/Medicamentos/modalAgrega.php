     <!-- Modal Agregar -->
            <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="agregarModalLabel">Crear Medicamento: </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/medicamentos" method="POST">
                            @csrf
                            @method('POST')
                        <div class="modal-body">                          
                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo1">Nombre: </label>
                                        <input type="text" required class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo2">Presentacion: </label>
                                    <select  type="text" requied class="form-control" id="presentacion" name="presentacion">
                                        <option>Comprimido</option>
                                        <option>Cápsula</option>
                                        <option>Liquido Oral</option>
                                        <option>Inyectable</option>
                                        <option>Crema</option>
                                        <option>Solución</option>
                                        <option>Aerosol</option>
                                    </select>
                                </div>


                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo3">ML MG: </label>
                                    <input type="number" step="any" min="0"  required class="form-control" id="ml_mg" name="ml_mg">
                                </div>

                                <div class="col-6">
                                    <label for="in_atributo2">Compuesto: </label>
                                    <input type="text" required class="form-control" id="compuesto" name="compuesto">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo2">Precio: </label>
                                    <input type="number" min="0"  required class="form-control" id="precio" name="precio">
                                </div>

                                <div class="col-6">
                                    <label for="in_atributo2">Laboratorio: </label>
                                    <input type="text" required class="form-control" id="laboratorio" name="laboratorio">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-3">
                                    <label for="in_atributo2">Paq Unidad: </label>
                                    <input type="number" min="1"  required class="form-control" id="paq_unidad" name="paq_unidad">
                                </div>

                                <div class="col-3">
                                    <label for="in_atributo2">Controlado: </label><br>
                                    <select  type="text" requied class="form-control" id="controlado" name="controlado">
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>

                                    <!--<input type="text" required class="form-control" id="controlado" name="controlado">-->
                                </div>

                                                                <div class="col-6">
                                    <label for="in_atributo2">Stock: </label>
                                    <input type="number" min="1" max="1000" required class="form-control" id="stock" name="stock">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo2">Fecha Caducidad: </label>
                                    <input type="date" required class="form-control" id="fecha_caducidad" name="fecha_caducidad">
                                </div>


                                                      <div class="col-6">
                                        <label for="in_atributo9">Clinica</label>
                                        <select class="form-control" name="clinica">
                                            @foreach ($Clinicas as $clinica)                                  
                                                <option value="{{$clinica->id}}">{{$clinica->nombre}}</option>
                                            @endforeach
                                        </select>
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