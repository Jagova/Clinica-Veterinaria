
@extends('control.layout')

@section('contenido')
<?php
        $mytime = date('Y-m-d');
        $eventos = array();
        

    ?>
    @foreach ($ocupados as $cita)
        <?php
            $new_data = array('start'=>"{$cita->fecha}");
            array_push($eventos, $new_data);
            
        ?>
    @endforeach
    
    
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            timeGrid: {
            // options apply to timeGridWeek and timeGridDay views
            },
            
            plugins: [ 'timeGrid', 'interaction'],
            defaultView: 'timeGridWeek',
            
            nowDate : "{{$mytime}}",

            validRange: {
                start: "{{$mytime}}"
            },
            locale : 'es',

            dateClick: function(info) {
                alert('Seleccionaste ' + info.dateStr);
                document.getElementById("fecha").value=info.dateStr;
            },
            businessHours: {
            // days of week. an array of zero-based day of week integers (0=Sunday)
            daysOfWeek: [ 1, 2, 3, 4, 5 ,6, 7 ], // Monday - Sunday

            startTime: '10:00', // a start time (10am in this example)
            endTime: '18:00', // an end time (6pm in this example)
            },
            height: 50,
            
            minTime: '10:00:00',
            maxTime: '18:00:00',
            events : <?php echo json_encode($eventos); ?>
       
        });

        calendar.render();
      });

    </script>
 
 
   
<div class="container-fluid">
    <div class="row justify-content-center m-3">
        <h1>Hacer una cita</h1>
    </div> 

    <div class="row shadow-lg mx-md-5 p-3 justify-content-center">
    <form action="/control/agendar/exitoso" method="POST">
                            @csrf
                            @method('POST')
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                <label for="clinica" style="font-weight:bold">Clínica</label>
                    
                <p id="c" name="c">{{$clinica->nombre}}</p>
                <input type="hidden" id="clinica" name="clinica" value="{{$clinica->id}}">
            </div>
            <div class="col-md-4 col-sm-12"> 
                <label for="servicio" style="font-weight:bold">Servicio</label>
                 <p id="s" name="s" >{{$servicio->nombre}}</p>
                 <input type="hidden" id="servicio" name="servicio" value="{{$servicio->id}}">
            </div>

        </div>
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                <label for="dueno" style="font-weight:bold">Dueño</label>
                
                <input type="text" class="form-control" required id="dueno" name="dueno"  >
            </div>
            <div class="col-md-4 col-sm-12"> 
                <label for="mascota" style="font-weight:bold">Mascota</label>
                
                <input type="text" class="form-control" required id="mascota" name="mascota"  >
            </div>

        </div>
        <div class="row w-100 justify-content-center">
            <div class="col-md-4 col-sm-12"> 
                <label for="fecha" style="font-weight:bold">Fecha: </label>
                
                <input type=text id="fecha" name="fecha"  required>
            </div>
            <div id="calendar"></div>

        </div>
        <div class="row w-100 justify-content- m-3">
            <div class="ml-auto">
                <button class="btn-primary p-2" type="submit">Agendar</button>

            </div>

        </div>
    </form>
        
    </div>
                

</div>


    
@endsection