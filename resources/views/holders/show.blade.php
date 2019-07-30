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

    <h1>Movimientos</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Cuentahabiente</th>
                <th>Cuenta</th>
                <th>Tipo</th>
                <th>Cantidad</th>
                <th>Referencia</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($holder->movements as $item)<!-- Recorre el array  -->
            <tr>
                <td>
                {{$item ->id}}
                </td>
                <td>{{$item->holder->name}}</td>
                <td>{{$item->account->no_cuenta}}</td>
                <td>{{$item->type}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->referencia}}</td>
            </tr>
        @endforeach<!-- Fin del recorrido del array -->
        </tbody>
    </table>

    <h1>Cuentas</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>No. de cuenta</th> 
                <th>Saldo</th>
                <th>Movimientos</th>
                <th>Lista de movimientos</th>
                
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
                <td>$ {{$item->saldo_actual}}</td>
                    
                <td> <a href="{{ route ('accountmovements.makeretiro',['account'=>$item]) }}"> Retiro </a>
                <a href="{{ route ('accountmovements.makeabono',['account'=>$item]) }}"> Abono </a> 
                </td>
                <td><a href="{{ route ('accounts.show',['account'=>$item])}}">Lista</a></td>
                </tr>
        @endforeach<!-- Fin del recorrido del array -->
        </tbody>
    </table>

    <h1>Creditos</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha de emision</th>
                <th>Monto solicitado</th>
                <th>Tasa</th>
                <th>Mensualidades</th>
                <th>Monto mensual</th>
            </tr>
        </thead>
        <tbody>
        @foreach($holder->credits as $item)<!-- Recorre el array  -->
            <tr>
                <td>
                {{$item ->id}}
                </td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->monto}}</td>
                <td>{{$item->tasa}}</td>
                <td>{{$item->mensualidad}}</td>
                <td>{{$item->monto_mensual}}</td>
            </tr>
        @endforeach<!-- Fin del recorrido del array -->
        </tbody>
    </table>

    <p><a href="{{ route ('holders.index') }}">
    Regresar a la lista de cuentahabientes</a></p>
    <p><a href="{{ route ('credits.create') }}">
    Simulador de creditos</a>
    </p>
</body> 
</html>  