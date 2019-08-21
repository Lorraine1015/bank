@extends('layouts.main')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><!-- Estilo de nuestro contenido -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1>Mi banco</h1>
    </div>
    <div>
    <h2>Perfil</h2>
        @if (Auth::check())
            <p class="text-uppercase h7">Bienvenida
            {{ Auth::user()->name }}
            </p>
            <a href="{{ route('users.logout') }}" class="btn btn-danger">Cerrar sesión</a>
        @else
            <div class="alert alert-danger">Ingresar a una cuenta o registrarse.</div>
            <ul>
                <a href="{{ route('users.register') }}" class="btn btn-info">Registrarse</a>
            </ul>
            <ul>
                <a href="{{ route('login') }}" class="btn btn-success">Iniciar sesión</a>
            </ul>
        @endif
        
    </div>
</main>
@endsection 
