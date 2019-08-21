<!DOCTYPE html>
<html>
<head>
<!--JQUERY-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Los iconos tipo Solid de Fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<!-- Nuestro css-->
<link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>
<body>
    <h1 class="text-white text-center">Iniciar sesión</h1>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="http://emser.es/wp-content/uploads/2016/08/usuario-sin-foto.png" width="80" height="80" alt="">
                </div>
                <form action="{{route('users.authenticate')}}"  class="col-12" method="POST"> 
                    @csrf
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" value="Iniciar sesión"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                    <p class="message text-white" >¿No tienes cuenta? <a href="{{route('users.register')}}">Crea una cuenta</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html> 
<!--
<h1>Iniciar sesión</h1>
<form action="{{route('users.authenticate')}}" method="POST">
    @csrf
    <label class="text-uppercase font-weight-bold">Correo</label>
    <input type="text"  class="form-control col-2" name="email">
    <label class="text-uppercase font-weight-bold">Contraseña</label>
    <input type="password" class="form-control col-2"  name="password">
    <input type="submit" value="Iniciar sesión">
</form>
<a href="{{ route('users.register') }}">No tengo cuenta</a> -->
