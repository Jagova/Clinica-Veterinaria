@extends('control.layout')

@section('contenido')
    <div class="container-fluid">
        <div class="card" style="width: 18rem;">
            <div class="row">
                <div class="col">
                <img class="card-img-top" src="{{ asset('images/Control/buscar.png') }}" alt="Card image cap">
                </div>
                <div class="col">
                    <div class="card-body">
                        <a class="card-text" href="/control/buscar">Buscar</a>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="card" style="width: 18rem;">
            <div class="row">
                <div class="col">
                <img class="card-img-top" src="{{ asset('images/Control/buscar.png') }}" alt="Card image cap">
                </div>
                <div class="col">
                    <div class="card-body">
                        <a class="card-text" href="/control/registro_dueno">Registrar dueño</a>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="card" style="width: 18rem;">
            <div class="row">
                <div class="col">
                <img class="card-img-top" src="{{ asset('images/Control/buscar.png') }}" alt="Card image cap">
                </div>
                <div class="col">
                    <div class="card-body">
                        <a class="card-text" href="/control/registro_mascota">Registrar mascota</a>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="card" style="width: 18rem;">
            <div class="row">
                <div class="col">
                <img class="card-img-top" src="{{ asset('images/Control/buscar.png') }}" alt="Card image cap">
                </div>
                <div class="col">
                    <div class="card-body">
                        <a class="card-text" href="/control/agendar">Agendar servicio</a>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="card" style="width: 18rem;">
            <div class="row">
                <div class="col">
                <img class="card-img-top" src="{{ asset('images/Control/buscar.png') }}" alt="Card image cap">
                </div>
                <div class="col">
                    <div class="card-body">
                        <a class="card-text" href="/control/registro_vacunas">Registro de vacunas</a>
                    </div>
                </div>
            </div>
            
        </div>    
        
        <div class="card" style="width: 18rem;">
            <div class="row">
                <div class="col">
                <img class="card-img-top" src="{{ asset('images/Control/buscar.png') }}" alt="Card image cap">
                </div>
                <div class="col">
                    <div class="card-body">
                        <a class="card-text" href="/control/registro_ventas">Registro de ventas</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="row">
                <div class="col">
                <img class="card-img-top" src="{{ asset('images/Control/buscar.png') }}" alt="Card image cap">
                </div>
                <div class="col">
                    <div class="card-body">
                        <a class="card-text" href="/control/registro_compras">Registro de compras</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="row">
                <div class="col">
                <img class="card-img-top" src="{{ asset('images/Control/buscar.png') }}" alt="Card image cap">
                </div>
                <div class="col">
                    <div class="card-body">
                        <a class="card-text" href="/control/historial_mascota">Historial de mascota</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="row">
                <div class="col">
                <img class="card-img-top" src="{{ asset('images/Control/buscar.png') }}" alt="Card image cap">
                </div>
                <div class="col">
                    <div class="card-body">
                        <a class="card-text" href="/control/historial_personal">Historial de personal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection