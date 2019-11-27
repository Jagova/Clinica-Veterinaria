@extends('control.layout')

@section('contenido')
   
<div class="container-fluid">
    <div class="row justify-content-center m-3">
        <h1>Bienvenido</h1>

        
    </div> 
    <div class="row justify-content-center p-0 m-0 w-100">
        <div id="carouselExampleIndicators" class="carousel slide m-0 p-0 w-100" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/carousel.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/carousel2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/carouse3.jpg') }}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Juguetes</h1>
                    <p>Para los consentidos del hogar</p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            
            </div>
            </div>
                

</div>
@endsection
