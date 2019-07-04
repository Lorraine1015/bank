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

    <h1>Cuenta</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>No. de cuenta</th>
                <th>Saldo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($holders->accounts as $item)<!-- Recorre el array  -->
                <tr>
                    <td>
                    {{$item ->id}}
                    </td>
                    <td>{{$item->no_cuenta}}</td>
                </tr>
            @endforeach<!-- Fin del recorrido del array -->
        </tbody>
    </table>
    <p><a href="{{ route ('holders.index') }}">
    Regresar a la lista de cuentahabientes</a>
    </p>
</body> 
</html>  