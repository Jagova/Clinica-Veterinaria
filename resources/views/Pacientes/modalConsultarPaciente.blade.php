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
                                    <td class = "form-group" >
                                        <label for="in_atributo1" style="font-weight:bold">Nombre</label>
                                        <p id="consultar-paciente-nombre" name="nombre"></p>
                                    </td>
                                    <td class = "form-group" >
                                        <label for="in_atributo2" style="font-weight:bold">Edad</label>
                                        <p id="consultar-paciente-edad" name="edad"></p>
                                    </td>
                                </tr>
                                <!-- Foto del paciente -->
                                <tr>
                                     <div class = "container" > 
                                        <img id="imagen" height="300" class="d-block w-100" alt="..." >
                                        </div>
                                   
                                </tr>
                                <tr>
                                    <td class = "form-group" >
                                        <label for="in_atributo3" style="font-weight:bold">Especie</label>
                                        <p id = "consultar-paciente-especie" name="especie"></p>  
                                    </td>
                                    <td class = "form-group" >
                                        <label for="in_atributo4" style="font-weight:bold">Raza</label>
                                        <p id="consultar-paciente-raza" name="raza"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group">
                                        <label for="in_atributo6" style="font-weight:bold">Dueño</label>
                                        <p id="consultar-paciente-duenio-id" name="dueno_id"></p>
                                    </div>
                                    <td class="form-group">
                                        <label for="in_atributo7" style="font-weight:bold">Doctor favorito</label>
                                        <p id="consultar-paciente-doctor-id" name="doctor_id"></p>
                                    </td>
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
         