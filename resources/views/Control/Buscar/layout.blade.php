@extends('control.layout')

@section('contenido')

<div class="container-fluid">
  <div class="row justify-content-center m-3">
    <h1>Buscar</h1>
  </div> 
  <div class="row">
    <nav class="navbar navbar-expand-md navbar-light shadow-md d-flex justify-content-between height-auto mx-auto">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuBuscar" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuBuscar">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/control/buscar/dueno">Dueño</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/control/buscar/mascota">Mascota</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  @yield('contenido2')
</div>

@endsection