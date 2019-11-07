@extends('shop.layout')

@section('contenido')
       
<div class="container-fluid p-0 m-0">     
  <div class="row justify-content-center m-3">
    <h1>Artículos para perros</h1>
  </div> 
  <div>
    <nav class="navbar navbar-expand-lg navbar-light shadow-md d-flex justify-content-between">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuCategoria">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </div>
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col-sm m-0 p-0">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete4.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete2.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete3.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm m-0 p-0">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete4.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete2.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete3.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm m-0 p-0">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete4.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete2.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete3.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>
      </div>
    </div> 


  </div>
 
</div>

@endsection