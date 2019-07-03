<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $account->name }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body> <!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>{{$account->id}}</h1>
    <p>{{$account->name}}</p>
    <p>{{$account->no_cuenta}}</p>
    <p>{{$account->saldo_actual}}</p>
    <p><a href="{{ route ('accounts.index') }}">
    Regresar a la lista de cuentas</a>
    </p>
</body>
</html>  