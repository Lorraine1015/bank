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
    <p>Nombre: {{$holder->name}}</p>
    <p>Apellido: {{$holder->lastname}}</p>

    <h1>Cuentas</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>No. de cuenta</th>
                <th>Saldo</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($holder->accounts as $item)<!-- Recorre el array  -->
                <tr>
                    <td>
                    {{$item ->id}}
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->no_cuenta}}</td>
                    <td>{{$item->saldo_actual}}</td>
                </tr>
            @endforeach<!-- Fin del recorrido del array -->
        </tbody>
    </table>
    <p><a href="{{ route ('holders.index') }}">
    Regresar a la lista de cuentahabientes</a>
    </p>
</body> 
</html>  