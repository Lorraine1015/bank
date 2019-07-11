<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevos movimientos</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nuevo abono</h1>
    <form method="POST" action="{{route('accountmovements.abono',['account'=>$account])}}">
    @csrf
        <p>Cuenta:</p>
        {{$account->id}}
        {{$account->name}}
        {{$account->no_cuenta}}
        <h2>¿Cuanto quieres abonar?</h2>
        <p>Cantidad</p>
        <input type="text" value="" name="movement[cantidad]">
        <p>Referencia</p>
        <input type="text" value="" name="movement[referencia]">
    
        <input type="submit" >
    </form>
 
</body>
</html> 