            <!-- Modal Consultar -->
            <div class="modal fade" id="consultarModal" tabindex="-1" role="dialog" aria-labelledby="consultarModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">  
                            <table class="table"> 
                                <tr>
                                    <td class="form-group">
                                            <label for="consultar-doctor-nombre1" style="font-weight:bold">Primer nombre</label>
                                            <p id="consultar-doctor-nombre1" name="nombre1"></p>      
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td class="form-group">
                                            <label for="consultar-doctor-apellido1" style="font-weight:bold">Apellido Paterno</label>
                                            <p id="consultar-doctor-apellido1" name="ApPaterno"></p>      
                                    </td>
                                    <td class="form-group">
                                            <label for="consultar-doctor-apellido2" style="font-weight:bold">Apellido Materno</label>
                                            <p id="consultar-doctor-apellido2" name="ApMaterno"></p>      
                                    </td>
                                </tr>
                                <!-- Foto del doctor -->
                                <tr>
                                    <div class = "container" > 
                                       <img id="imagen" height="300" class="d-block w-100" alt="..." >
                                       </div>
                                  
                               </tr>
                                <tr>
                                        <td class="form-group">
                                                <label for="consultar-doctor-especialidad1" style="font-weight:bold">Especialidad 1</label>
                                                <p id="consultar-doctor-especialidad1" name="esp1"></p>       
                                        </td>
                                        <td class="form-group">
                                                <label for="consultar-doctor-especialidad2" style="font-weight:bold">Especialidad 2</label>
                                                <p id="consultar-doctor-especialidad2" name="esp2"></p>        
                                        </td>
                                </tr>
                                <tr>
                                        <label for="consultar-doctor-clinica" style="font-weight:bold">Clínica</label>
                                        <p name="clinica" id="consultar-doctor-clinica"></p>
                                </tr>
                               
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
