<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cosmo/bootstrap.min.css"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <title> Clinica veterinaria </title>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JQuery Link -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm sticky-top py-0 px-5">
            <a class="navbar-brand" href="/"><img class="img-fluid" width="70" src="{{URL::asset('images/logo2.png')}}"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MenuAdmin"
                aria-controls="MenuAdmin" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse m-0" id="MenuAdmin">
                <ul class="navbar-nav mr-auto mx-auto">
                    <li class="nav-item active p-3">
                        <a class="nav-link menuControl" href="/control/buscar"></i>
                            Buscar</a>
                    </li>
                    <li class="nav-item active p-3">
                        <a class="nav-link menuControl" href="/control/registro_dueno"></i>
                            Registrar Dueño</a>
                    </li>
                    <li class="nav-item active p-3">
                        <a class="nav-link menuControl" href="/control/registro_mascota"></i>
                            Registrar Mascota</a>
                    </li>
                    <li class="nav-item active p-3">
                        <a class="nav-link menuControl" href="/control/agendar"></i>
                            Agendar servicio</a>
                    </li>
                    
                    
                    <li class="nav-item active p-3">
                        <a class="nav-link menuControl" href="/control/historial_personal"></i>
                            Historial del personal</a>
                    </li>

                    <li class="nav-item active p-3">
                        <a class="nav-link menuControl" href="/reportes"></i>
                            Reportes</a>
                    </li>

                    <li class="nav-item active p-3">
                    <a class="nav-link menuControl" href="/control/citas"></i>
                        Consultar citas</a>
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
