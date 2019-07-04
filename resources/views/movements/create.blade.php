<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevos movimientos</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nuevo movimiento</h1>
    <form method="POST" action="{{route('movements.store')}}">
    @csrf
        <p>Cuenta</p>
        <select name="movement[account_id]">
            @foreach($accounts as $item)
                <option value="{{$item->id}}">
                    {{$item->name}}
                    {{$item->no_cuenta}}
                </option>
            @endforeach    
        </select>
        <p>Cantidad</p>
        <input type="text" value="" name="movement[cantidad]">
        <p>Referencia</p>
        <input type="text" value="" name="movement[referencia]">
    
        <input type="submit" >
    </form>

</body>
</html> 