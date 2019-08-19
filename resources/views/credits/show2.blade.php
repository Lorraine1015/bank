
<!--SEGUNDA FORMA DE SIMULADOR DE CREDITOS,MENOS RECURSOS USADO PARA UN NUMERO MENOR DE PLAZOS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<!--Seccion de Layout-->
@extends('layouts.main')
<!--Seccion de php-->
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<p class="text-uppercase font-weight-bold">Plazo:</p>{{ $plazo }}<!--Forma de llamar la variable function-->
<p class="text-uppercase font-weight-bold">Monto:</p>{{ $monto }}
<p class="text-uppercase font-weight-bold">Tasa Anual:</p>{{ $tasaAnual }}
<p class="text-uppercase font-weight-bold">Tasa Anual c/IVA:</p>{{ $tasaAnualCIVA }}
<p class="text-uppercase font-weight-bold">Tasa Mensual s/IVA:</p>{{ $tasaMensualSIVA }}
<p class="text-uppercase font-weight-bold">Tasa Mensual c/IVA:</p>{{ $tasaMensualCIVA }}
<p class="text-uppercase font-weight-bold">Pago Mensual:</p>{{ $pagoMensual}}
<p></p>
<div class="container">
    <table class="table table-striped table-sm text-center">
        <thead>
            <tr>
                <th>Plazo (Meses,semanas,dias)</th>
                <th>Saldo insoluto</th>
                <th>Pago mensual total</th>
                <th>Capital</th>
                <th>Intereses</th>
                <th>IVA</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result['plazo'] }}</td>
                    <td>{{ $result['saldo_insoluto'] }}</td>
                    <td>{{ $result['pago_mensual'] }}</td>
                    <td>{{ $result['capital'] }}</td>
                    <td>{{ $result['intereses'] }}</td>
                    <td>{{ $result['iva'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <p><a href="{{ route ('holders.index') }}" class="btn btn-primary btn-sm">
    Regresar a la lista de cuentahabientes</a></p>
</main>
@endsection