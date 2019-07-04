<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar movimiento</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Editar movimiento</h1>
    <form method="POST"  action="{{route('movements.update',['movement'=>$movement])}}"><!-- Se acciona junto con la funcion.update,su argumento -->
        @csrf 
        {{method_field('PUT')}}
        <p>Tipo</p>
        <select name="movement[type]" >
            <option value="Retiro">Retiro</option>
            <option value="Abono">Abono</option>
        </select>
        
        <p>Cantidad</p>
        <input type="text" value="{{$movement->cantidad}}" name="movement[cantidad]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <p>Referencia</p>
        <input type="text" value="{{$movement->referencia}}" name="movement[referencia]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        
        <input type="submit" value="Editar">
    </form>
</body>
</html>