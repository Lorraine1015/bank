<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Banco</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/"><!-- Importamos Bootstrap 4 cdn -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"><!-- Ruta para importar los estilos asignados -->
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0 h1 text-uppercase" href="{{route('homepage')}}">Banco</a>
</nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('holders.index')}}">
                  <span data-feather="home"></span>
                  Cuentahabiente <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('accounts.index')}}">
                  <span data-feather="file"></span>
                  Cuentas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('movements.index')}}">
                  <span data-feather="shopping-cart"></span>
                  Movimientos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('credits.create')}}">
                  <span data-feather="users"></span>
                  Simulador de credito
                </a>
              </li>
            </ul>
          </div>
        </nav>
        
        @yield ("content") <!-- Comienza nuestro contenido importado desde home.index-->

      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@yield('jquery_script')


</body>
</html>