

<!DOCTYPE html>
<html lang="en">
<!--Vista de perfil opcional-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
</head>
    <body>
        <h1>Perfil</h1>
        @if (Auth::check())
            {{ Auth::user()->name }}
            <a href="{{ route('users.logout') }}">Cerrar sesión</a>
        @else
            El usuario no tiene sesión.
            <ul>
                <li><a href="{{ route('users.register') }}">Registrarse</a></li>
            </ul>
        @endif
    </body>
</html> 
