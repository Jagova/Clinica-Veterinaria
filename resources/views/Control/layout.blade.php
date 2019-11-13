<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cosmo/bootstrap.min.css"  crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0b5b009d42.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- JQuery Link -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!--FullCalendar-->
    <link href="{{ asset('fullcalendar/core/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('fullcalendar/daygrid/main.css') }}" rel='stylesheet' />
    <script src="{{ asset('fullcalendar/core/main.js') }}"></script>
    <script src="{{ asset('fullcalendar/daygrid/main.js') }}"></script>

    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid' ]
        });

        calendar.render();
      });

    </script>
 
 
    <title> Clinica veterinaria </title>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm sticky-top">
            <a class="navbar-brand" href="/"><img class="img-fluid" width="70" src="{{URL::asset('images/logo-prueba.png')}}"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MenuAdmin"
                aria-controls="MenuPrincipal" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="MenuAdmin">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/control/buscar"></i>
                            Buscar</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/control/registro_dueno"></i>
                            Registrar Dueño</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/control/registro_mascota"></i>
                            Registrar Mascota</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/control/agendar"></i>
                            Agendar servicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/control/registro_vacunas"></i>
                            Registro de vacunas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/control/registro_vacunas"></i>
                            Registro de ventas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/control/registro_compras"></i>
                            Registro de compras</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/control/historial_mascota"></i>
                            Historial de mascota</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/control/historial_personal"></i>
                            Historial del personal</a>
                    </li>
                    
                </ul>
                <hr />
            </div>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>
                        </li>

                        <form id="logout-form" action="logoutuser" method="POST" style="display: none;">
                            @csrf
                        </form>
                @endguest
            </ul>
        </div>
        
    </nav>

          
        @yield('contenido')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
      </div>
</body>
</html>
