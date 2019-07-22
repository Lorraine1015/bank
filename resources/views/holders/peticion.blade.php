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
        <p>Tasa fija del banco:<br/>Anual:59.40%<br/>Mensual S/IVA: 4.95%</p>
        <input type="hidden" value="59.40" name="tasa">

        <input type="submit" value="Solicitar">
    </form>

</body>
</html> 