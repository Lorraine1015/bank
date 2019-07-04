<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movimiento</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Movimiento</h1>
    <a href="{{route('movements.create')}}">
    Crear un movimiento
    </a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Cuenta</th>
                <th>Cantidad</th>
                <th>Referencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movements as $movement)
                <tr>
                    <td>
                        <a href="{{route('movements.show',['movement'=>$movement]) }}">
                            {{$movement->id}}
                        </a>
                    </td>
                    <td>{{$movement->account->name}}</td>
                    <td>{{$movement->cantidad}}</td>
                    <td>{{$movement->referencia}}</td>
                    <td>
                        <a href="{{route('movements.edit',['movement'=>$movement]) }}">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('movements.delete',['movement'=>$movement])}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> 