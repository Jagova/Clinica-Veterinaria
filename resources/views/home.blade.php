@extends('layouts.app')

@section('content')
<div class="container">
                


                    <header class="masthead bg-primary text-white text-center">
                        <div class="container d-flex align-items-center flex-column">
                    
                          <!-- Masthead Avatar Image -->
                          <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">
                    
                          <!-- Masthead Heading -->
                          <h1 class="masthead-heading text-uppercase mb-3">Bienvenido {{ Auth::user()->name }}</h1>
                    
                          <div class="container row mt-3 mb-4">
                              <div class="col-6"> <a class="text-decoration-none text-white h3" href="/clinicas">Administración</a> </div>
                              <div class="col-6"> <a class="text-decoration-none text-white h3" href="">Control de usuarios</a>  </div>
                          </div>
                    
                          
                        </div>
                      </header>
                
            
        
    
</div>
@endsection
