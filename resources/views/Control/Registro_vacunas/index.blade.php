@extends('control.layout')

@section('contenido')

   
<div class="container-fluid">
    <div class="row justify-content-center m-3">
        <h1>Registrar Servicio</h1>
    </div> 
    <div class="row shadow mx-md-5 p-3 justify-content-center my-3">
        <h4 class="mr-3" style="font-weight:bold">Clínica </h4>
        <select required class="form-control w-25 min-vw-25" name="clinica_id">
                            
        </select>

    </div>
    <div class="row shadow-lg mx-md-5 p-3 justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                <label for="servicio" style="font-weight:bold">Servicio</label>
                <select required class="form-control" name="servicio_id">
                            
                </select>
            </div>

        </div>
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                <label for="dueno" style="font-weight:bold">Dueño</label>
                <select required class="form-control" name="dueno_id">
                            
                </select>
            </div>
            <div class="col-md-4 col-sm-12"> 
                <label for="mascota" style="font-weight:bold">Mascota</label>
                <select required class="form-control" name="mascota_id">
                                
                    </select>
            </div>

        </div>
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                <label for="fecha" style="font-weight:bold">Fecha</label>
                <input type="date" min="2019-01-01" max="2025-12-31"  required class="form-control" id="fecha" name="fecha">
            </div>
            <div class="col-md-4 col-sm-12"> 
                <!-- Doctor o asistente -->
                <label for="encargado" style="font-weight:bold">Encargado</label>
                <select required class="form-control" name="encargado_id">
                                
                </select>
            </div>

        </div>
        
    </div>
                

</div>


    
@endsection