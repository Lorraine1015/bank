<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cuentahabientes</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Cuentahabientes</h1>
    <a href="{{route('holders.create')}}">
    Crear un cuentahabiente
    </a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($holders as $holder)
                <tr>
                    <td>
                        <a href="{{route('holders.show',['holder'=>$holder]) }}">
                            {{$holder->id}}
                        </a>
                    </td>
                    <td>{{$holder->name}}</td>
                    <td>{{$holder->lastname}}</td>
                    <td>
                        <a href="{{route('holders.edit',['holder'=>$holder]) }}">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('holders.delete',['holder'=>$holder])}}">
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