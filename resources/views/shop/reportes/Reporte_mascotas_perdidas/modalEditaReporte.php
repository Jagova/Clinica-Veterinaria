<!-- Modal editar -->
            <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editarModalLabel">Editar Articulo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form-editar" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group row ">
                                        <div class="col-6">
                                        <label for="editar-nombre">Nombre:</label>
                                            <input type="text" required class="form-control" id="editar-articulo-nombre" name="nombre">
                                    </div>

                                    <div class="col-6">
                                        <label for="editar-articulo-precio">Precio Compra:</label>
                                        <input type="text" required class="form-control" id="editar-articulo-precio" name="preciocom">
                                    </div>
                                </div>

                                    <div class="form-group row">
                                        <div class="col-6">
                                        <label for="editar-articulo-marca">Marca: </label>
                                        <input type="text" required class="form-control" id="editar-articulo-marca" name="marca">
                                    </div>

                                    <div class="col-6">
                                        <label for="editar-articulo-stock">Stock: </label>
                                        <input type="number" min="1" max="1000" required class="form-control" id="editar-articulo-stock" name="stock">
                                    </div>
                                </div>

                                    <div class="form-group row">
                                        <div class="col-6">
                                        <label for="editar-articulo-fecha">Fecha Cad: </label>
                                        <input type="date" min="2019-01-01" max="2025-12-31" required class="form-control" id="editar-articulo-fecha" name="fecha_cad">
                                    </div>

                                    <div class="col-6">
                                        <label for="editar-articulo-preciou">Precio Un</label>
                                        <input type="text" required class="form-control" id="editar-articulo-preciou" name="precio_u">
                                    </div>
                                </div>

                            <div class="form-group row">
                                <div class="col-6">
                                        <label for="editar-categoria">Categoria</label>
                                        <select required class="form-control" name="categoria" id="editar-categoria">
                                            @foreach ($Categoria as $categoria)                                  
                                                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                            @endforeach
                                        </select>
                                </div>


                            <div class="col-6">
                                        <label for="editar-subcategoria">Subcategoria</label>
                                        <select required class="form-control" name="subcategoria" id="editar-subcategoria">
                                            @foreach ($Subcategoria as $subcategoria)                                  
                                                <option value="{{$subcategoria->id}}">{{$subcategoria->nombre}}</option>
                                            @endforeach
                                        </select>
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