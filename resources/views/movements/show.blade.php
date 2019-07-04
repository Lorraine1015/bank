<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $movement->id }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body> <!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>{{$movement->id}}</h1>
    <p>{{$movement->cantidad}}</p>
    <p>{{$movement->referencia}}</p>
    <p><a href="{{ route ('movements.index') }}">
    Regresar a la lista de movimientos</a>
    </p>
</body>
</html>  