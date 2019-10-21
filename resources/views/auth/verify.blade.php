@extends('layouts.app')

@section('content')
<h1>Verificación de correo electrónico</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu dirección de correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se envió un nuevo enlace de verficación a tu correo electrónico') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor revisa tu bandeja de correo electrónico para asegurarte de que te haya sido mandado el correo de verificación.') }}
                    {{ __('Si no recibiste el enlace') }}, <a href="{{ route('verification.resend') }}">{{ __('da click aquí para solicitar uno nuevo') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
