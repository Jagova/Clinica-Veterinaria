           <!-- Modal editar -->
            <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editarModalLabel">Editar Medicamento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-editar" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo1">Nombre: </label>
                                        <input type="text" required class="form-control" id="editar-m-nombre" name="nombre">
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo2">Presentacion: </label>
                                    <select  type="text" requied class="form-control" id="editar-m-presentacion" name="presentacion">
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
                                    <input type="number" min="1" max="1000"  required class="form-control" id="editar-m-mlmg" name="ml_mg">
                                </div>

                                <div class="col-6">
                                    <label for="in_atributo2">Compuesto: </label>
                                    <input type="text" required class="form-control" id="editar-m-compuesto" name="compuesto">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo2">Precio: </label>
                                    <input type="number" min="1" max="1000"  required class="form-control" id="editar-m-precio" name="precio">
                                </div>

                                <div class="col-6">
                                    <label for="in_atributo2">Laboratorio: </label>
                                    <input type="text" required class="form-control" id="editar-m-laboratorio" name="laboratorio">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-3">
                                    <label for="in_atributo2">Paq Unidad: </label>
                                    <input type="number" min="1" max="1000"  required class="form-control" id="editar-m-paqunidad" name="paq_unidad">
                                </div>

                                <div class="col-3">
                                    <label for="in_atributo2">Controlado: </label>
                            <!--        <input type="text" required class="form-control" id="editar-m-controlado" name="controlado">-->
                                    <select  type="text" requied class="form-control" id="editar-m-controlado" name="controlado">
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>
                                </div>


                                <div class="col-6">
                                    <label for="in_atributo2">Stock: </label>
                                    <input type="number" min="1" max="1000"  required class="form-control" id="editar-m-stock" name="stock">
                                </div>



                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo2">Fecha Caducidad: </label>
                                    <!--<input type="date" required class="form-control" id="editar-m-fechcad" name="fecha_caducidad">-->
                                     <input type="date" required class="form-control" id="editar-m-fechcad" name="fecha_caducidad"
                                      min="2019-01-01" max="2025-12-31">
                                </div>

                                 <div class="col-6">
                                    <label for="editar-doctor-clinica">Clínica</label>
                                    <select class="form-control" name="clinica" id="editar-doctor-clinica">
                                        @foreach ($Clinicas as $clinica)                                  
                                                <option value="{{$clinica->id}}">{{$clinica->nombre}}</option>
                                            @endforeach
                                        </select>
                                </div>

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