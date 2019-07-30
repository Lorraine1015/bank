<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body> <!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    
    <p>Monto: {{$monto}}</p>
    <p>Mensualidad: {{$mensualidad}}</p>
    <p>Tasa: {{$tasa}}</p>
    <p>Monto mensual:{{$monto_mensual}} </p>
    <p>Abonos: {{$movement}}</p>

    
    <h1>Credito</h1>

    <table style="text-align:center;">
        <thead>
            <tr>
                
                <th>Cuentahabiente</th>
                <th>Monto solicitado</th>
                <th>Tasa</th>
                <th>Mensualidades</th>
                <th>Monto mensual</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    
                    <td>{{ $credit['holder_id'] }}</td>
                    <td>{{ $credit['monto'] }}</td>
                    <td>{{ $credit['tasa'] }}</td>
                    <td>{{ $credit['mensualidad'] }}</td>
                    <td>{{ $credit['monto_mensual'] }}</td>
                </tr>
            
        </tbody>
    </table>
    
    <p><a href="{{ route ('holders.index') }}">
    Regresar a la lista de cuentahabientes</a></p>
</body>
</html>  