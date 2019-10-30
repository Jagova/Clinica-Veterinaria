<!-- Modal Consultar -->
<div class="modal fade" id="consultarModal" tabindex="-1" role="dialog" aria-labelledby="consultarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="consultarModalLabel">
                        <div class="modal-body">
                               Infomación del asistente <b><span id="consultar-asistente-nombre"></span> </b>
                            </div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">  
                
                <table class="table"> 
                    <tr>
                        <td class="form-group">
                            <label for="consultar-asistente-nombre1" style="font-weight:bold">Primer nombre</label>
                            <p id="consultar-asistente-nombre1" name="nombre1"></p>       
                        </td>
                        <td class="form-group">
                            <label for="consultar-asistente-nombre2" style="font-weight:bold">Segundo nombre</label>
                            <p id="consultar-asistente-nombre2" name="nombre2"></p>
                        </td>
                    </tr>
                    <tr>
                        <td class="form-group">
                                <label for="consultar-asistente-apellido1" style="font-weight:bold">Apellido Paterno</label>
                                <p id="consultar-asistente-apellido1" name="ApPaterno"></p>        
                        </td>
                        <td class="form-group">
                                <label for="consultar-asistente-apellido2" style="font-weight:bold">Apellido Materno</label>
                                <p id="consultar-asistente-apellido2" name="ApMaterno"></p>    
                        </td>
                    </tr>

                    <tr>
                        <div class = "container" > 
                           <img id="imagen" height="300" class="d-block w-100" alt="..." >
                           </div>

                   </tr>
                    <tr>
                            <td class="form-group">
                                    <label for="consultar-asistente-especialidad1" style="font-weight:bold">Especialidad 1</label>
                                    <p id="consultar-asistente-especialidad1" name="esp1"></p>        
                            </td>
                            <td class="form-group">
                                    <label for="consultar-asistente-especialidad2" style="font-weight:bold">Especialidad 2</label>
                                    <p id="consultar-asistente-especialidad2" name="esp2"></p>      
                            </td>
                    </tr>
                    <tr>
                        <td class="form-group">
                                <label for="consultar-asistente-correo" style="font-weight:bold">Correo</label>
                                <p id="consultar-asistente-correo" name="correo"></p>        
                        </td>
                        <td class="form-group">
                                <label for="consultar-asistente-telefono" style="font-weight:bold">Telefono</label>
                                <p id="consultar-asistente-telefono" name="telefono"></p>
                        </td>
                    </tr>
                    <tr>
                        <td class="form-group">
                            <label for="consultar-asistente-clinica" style="font-weight:bold">Clínica</label>
                            <p name="clinica" id="consultar-asistente-clinica"></p>
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
