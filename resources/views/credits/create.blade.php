<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevas cuentas</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Simulador de cuenta</h1>
    <form method="POST" action="{{ route ('credits.store') }}">
    @csrf
        <p>Plazo</p>
        <input type="text" value="" name="plazo">
        <p>Monto</p>
        <input type="text" value="" name="monto">
        <p>Tasa anual</p>
        <input type="text" value="" name="tasa_anual">
        <p><a href="{{ route ('credits.show',['credit'=>$credit]) }}">Calcular</a></p>
    </form>

</body>
</html> g