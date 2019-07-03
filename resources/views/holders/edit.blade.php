<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar cuentahabiente</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Editar cuentahabiente</h1>
    <form method="POST"  action="{{route('holders.update',['holder'=>$holder])}}"><!-- Se acciona junto con la funcion.update,su argumento -->
        @csrf 
        {{method_field('PUT')}}
        <p>Nombre</p>
        <input type="text" value="{{$holder->name}}" name="holder[name]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <p>Apellido</p>
        <input type="text" value="{{$holder->lastname}}" name="holder[lastname]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <input type="submit" value="Editar">
    </form>
</body>
</html>