            <!-- Modal Agregar -->
            <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="agregarModalLabel">Crear Articulo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/articulos" method="POST">
                            @csrf
                            @method('POST')
                        <div class="modal-body">                          
                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo1">Nombre: </label>
                                        <input type="text" required class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="col-6">
                                    <label for="in_atributo2">Precio Compra: </label>
                                    <input type="number" min="1" max="1000" required class="form-control" id="preciocom" name="preciocom">

                                </div>


                            </div>

                            <div>
                                Foto
                                <input type="file" name="imagen" id=imagen>
                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo3">Marca: </label>
                                    <input type="text" required class="form-control" id="marca" name="marca">
                                </div>

                                <div class="col-6">
                                    <label for="in_atributo4">Stock: </label>
                                    <input type="number" min="1" max="1000" required class="form-control" id="stock" name="stock">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo5">Fecha Caducidad: </label>
                                    <input type="date" min="2019-01-01" max="2025-12-31"  required class="form-control" id="fecha_cad" name="fecha_cad">
                                </div>

                                <div class="col-6">
                                    <label for="in_atributo6">Precio Ut: </label>
                                    <input type="number" min="1" max="1000" required class="form-control" id="precio_u" name="precio_u">
                                </div>
                            </div>


                            <div class="form-group row ">
                                <div class="col-6">
                                        <label for="in_atributo7">Categoria</label>
                                        <select class="form-control" name="categoria">
                                            @foreach ($Categoria as $categoria)                                  
                                                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                            @endforeach
                                        </select>
                                </div>


                            <div class="col-6">
                                        <label for="in_atributo8">Subcategoria</label>
                                        <select class="form-control" name="subcategoria">
                                            @foreach ($Subcategoria as $subcategoria)                                  
                                                <option value="{{$subcategoria->id}}">{{$subcategoria->nombre}}</option>
                                            @endforeach
                                        </select>
                                </div>

                            </div>


                                <div class="form-group">
                                        <label for="in_atributo9">Clinica</label>
                                        <select class="form-control" name="clinica">
                                            @foreach ($Clinicas as $clinica)                                  
                                                <option value="{{$clinica->id}}">{{$clinica->nombre}}</option>
                                            @endforeach
                                        </select>
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