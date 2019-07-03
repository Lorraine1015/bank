<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevos cuentahabientes</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nuevo cuentahabiente</h1>
    <form method="POST" action="{{route('holders.store')}}">
    @csrf
        <p>Nombre</p>
        <input type="text" value="" name="holder[name]">
        <p>Apellido</p>
        <input type="text" value="" name="holder[lastname]">
        <input type="submit" >
    </form>

</body>
</html> 