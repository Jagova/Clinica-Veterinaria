@extends('control.layout')

@section('contenido')

   
<div class="container-fluid">
  <div class="row justify-content-center m-3">
    <h1>Registrar mascota</h1>
  </div> 
    <div class="row shadow-lg mx-md-5 p-3">
        <table class="w-100 h-100">
            <tr class="mh-100">
                <td class="w-25 h-100">
                    <div class="card shadow h-100" style="width: 18rem;">
                        Foto:
                        <input type="file" name="imagen" id="imagen">
                    </div>
                </td>
                <td>
                    <label for="mascota-nombre" style="font-weight:bold">Nombre</label>
                    <input type="text" required class="form-control" id="nombre" name="nombre">
                </td>
                <td>
                    <label for="mascota-edad" style="font-weight:bold">Edad</label>
                    <input required class="form-control" id="edad" name="edad" type="edad"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label for="mascota-especie" style="font-weight:bold">Especie</label>
                    <select required class="form-control" id = "especie" name="especie">
                                        
                                    </select>
                </td>
                
                <td>
                    <label for="mascota-raza" style="font-weight:bold">Raza</label>
                    <input type="text" required class="form-control" id="raza" name="raza">
                </td>
                
            </tr>
            <tr>
                <td></td>
                <td>
                    <label for="mascota-dueno" style="font-weight:bold">Dueño</label>
                    <select required class="form-control" name="duenio_id">
                            
                        </select>
                </td>
                <td>
                    <label for="mascota-doctor" style="font-weight:bold">Doctor</label>
                    <select required class="form-control" name="doctor_id">
                                
                        </select>
                </td>
            </tr>
        </table>
    </div>
</div>


    
@endsection