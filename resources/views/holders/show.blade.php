<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $holder->name }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body> <!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>{{$holder->id}}</h1>
    <p>{{$holder->name}}</p>
    <p>{{$holder->lastname}}</p>
    <p><a href="{{ route ('holders.index') }}">
    Regresar a la lista de cuentahabientes</a>
    </p>
</body>
</html>  