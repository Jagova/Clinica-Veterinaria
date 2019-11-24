            <!-- Modal Agregar -->
            <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="agregarModalLabel">Registrar Reporte</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/reportes" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                        <div class="modal-body">
                      
                                <div class="form-group row">
                                    <div class="col-6">
                                    <label for="in_atributo1">Título: </label>
                                        <input type="text" required class="form-control" id="titulo" name="titulo">
                                </div>

                                 <div class="col-6">
                                    <label for="in_atributo3">Fecha: </label>
                                    <input type="date" required class="form-control" id="fecha" name="fecha">
                                </div>

                        <div class = "row">
                            <div class="col-5">
                                <div>
                                    Foto
                                    <input type="file" name="imagenStore" id="imagenStore">
                                </div>
                            </div>
                        </div>
                                

                            </div>

                                <div class="form-group row">

                                    <div class="col-12">
                                    <label for="in_atributo2">Descripción: </label>
                                    <textarea class="form-control" rows="5" id="descripcion" maxlength="200" name="descripcion" style="min-width: 100%"></textarea>

                                </div>
                                   

                                
                            </div>

                                >


                            <div class="form-group row ">
                                <div class="col-6">
                                        <label for="in_atributo7">Estado</label>
                                        <select class="form-control" name="estado">
                                            <option>Abierto</option>
                                            <option>Cerrado</option>

                                            
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