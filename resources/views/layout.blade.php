<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <title> Clinica veterinaria </title>

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JQuery Link -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
  <div class="container">
      <header>
          <nav class="navbar navbar-expand-lg navbar-light shadow-md d-flex justify-content-between">
                  <a class="navbar-brand" href="/"><img class="img-fluid" width="70" src="{{URL::asset('images/logo-prueba.png')}}"/></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MenuAdmin"
                  aria-controls="MenuPrincipal" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="MenuAdmin">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                          <a class="nav-link" href="/clinicas"><i class="fas fa-hospital"></i>
                              Clinicas</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="/doctores"><i class="fas fa-stethoscope"></i>
                              Doctores</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="/asistentes"><i class="fas fa-hands-helping"></i>
                              Asistentes</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="#"><i class="fas fa-users icon-orange"></i>
                              Dueños</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="/pacientes"><i class="fas fa-paw"></i>
                              Pacientes</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="#"><i class="fas fa-archive"></i>
                              Inventario</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="/servicios"><i class="fas fa-heartbeat"></i>
                              Servicios</a>
                      </li>
                  </ul>
                  <hr />
              </div>

          </nav>
        @yield('contenido')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
      </div>
</body>
</html>
