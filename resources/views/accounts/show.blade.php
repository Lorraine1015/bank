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
    <p>Nombre: {{$account->name}}</p>
    <p>No. de cuenta: {{$account->no_cuenta}}</p>
    <p>Saldo: ${{$account->saldo_actual}}</p>

    <h1>Movimientos</h1>

<table> 
    <thead>
        <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th>Referencia</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($account->movements as $item)<!-- Recorre el array  -->
            <tr>
                <td>
                {{$item ->id}}
                </td>
                <td>{{$item->type}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->referencia}}</td>
            </tr>
        @endforeach<!-- Fin del recorrido del array -->
    </tbody>
</table>
    <p><a href="{{ route ('accounts.index') }}">
    Regresar a la lista de cuentas</a>
    </p>
</body>
</html>  