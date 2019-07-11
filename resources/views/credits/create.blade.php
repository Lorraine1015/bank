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
        <input type="text" value="" name="Plazo">
        <p>Monto</p>
        <input type="text" value="" name="Monto">
        <p>Tasa anual</p>
        <input type="text" value="" name="Tasa_anual">
        <p><a href="{{ route ('credits.show') }}">Calcular</a></p>
    </form>

</body>
</html> 