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
    <!--Metodo get para obtener los datos-->
    <form method="GET" action="{{ route ('credits.show') }}">
    @csrf
        <p>Plazo</p>
        <input type="text" value="" name="plazo">
        <p>Monto</p>
        <input type="text" value="" name="monto">
        <p>Tasa anual</p>
        <input type="text" value="" name="tasa_anual">
        <input type="submit" value="Calcular"><!--El submit para enviar los datos a la action-->
    </form>

</body>
</html> 