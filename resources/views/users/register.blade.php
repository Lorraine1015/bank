<!DOCTYPE html>
<html>
<head>
<!-- Nuestro css-->
<link rel="stylesheet" href="{{ asset('css/register.css') }}">


</head>
<div class="container">
    <div class="form cuadrotext">
        <h1>Registro de usuarios</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <label>Nombre</label>
            <input type="text" name="name" placeholder="Nombre">
            <label>Correo</label>
            <input type="text" name="email" placeholder="Email">
            <label>Contraseña</label>
            <input type="password" name="password">

            <input type="submit" value="Registrar">
        </form>
    </div>
</div>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>

        <h1>Registro de usuarios</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <label>Nombre</label>
            <input type="text" name="name">
            <label>Correo</label>
            <input type="text" name="email">
            <label>Contraseña</label>
            <input type="password" name="password">
            <input type="submit" value="Registrar">
        </form>
    </body>
</html> 
-->
