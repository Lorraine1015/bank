<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nueva peticion</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Peticion de credito</h1>
    <form method="GET" action="{{ route ('holders.credito',['holder'=>$holder]) }}">
    @csrf
        <p>Monto a pedir</p>
        <input type="text" value="" name="monto">
        <p>¿A cuantos meses deseas pagar?</p>
        <input type="text" value="" name="mensualidad">
        <p>Tasa fija del banco:<br/>Anual:59.40%<br/>Mensual C/IVA: 5.74%</p>
        <input type="hidden" value="59.40" name="tasa">
        <input type="hidden" value="{{$holder->id}}" name="credit[holder_id]">
        
        <input type="submit" value="Solicitar">
    </form>
    
    <p><a href="{{ route ('holders.index') }}">
    Regresar a la lista de cuentahabientes</a></p>

</body>
</html> 