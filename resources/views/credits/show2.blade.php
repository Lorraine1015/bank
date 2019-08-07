
<!--SEGUNDA FORMA DE SIMULADOR DE CREDITOS,MENOS RECURSOS USADO PARA UN NUMERO MENOR DE PLAZOS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<!--Seccion de Layout-->
@extends('layouts.main')
<!--Seccion de php-->
@section('content')
<p>Plazo:</p>{{ $plazo }}<!--Forma de llamar la variable function-->
<p>Monto:</p>{{ $monto }}
<p>Tasa Anual:</p>{{ $tasaAnual }}
<p>Tasa Anual c/IVA:</p>{{ $tasaAnualCIVA }}
<p>Tasa Mensual s/IVA:</p>{{ $tasaMensualSIVA }}
<p>Tasa Mensual c/IVA:</p>{{ $tasaMensualCIVA }}
<p>Pago Mensual:</p>{{ $pagoMensual}}
<div class="container">
    <div class="row">
        <div class="col">
            <p class="text-center text-uppercase"><strong>Plazo (Meses,semanas,dias)</strong></p>
        </div>
        <div class="col">
            <p class="text-center text-uppercase"><strong>Saldo insoluto</strong></p>
        </div>
        <div class="col">
            <p class="text-center text-uppercase"><strong>Pago mensual total</strong></p>
        </div>
        <div class="col">
            <p class="text-center text-uppercase"><strong>Capital</strong></p>
        </div>
        <div class="col">
            <p class="text-center text-uppercase"><strong>Intereses</strong></p>
        </div>
        <div class="col">
            <p class="text-center text-uppercase"><strong>IVA</strong></p>
        </div>
    </div>

    
    @foreach($results as $result)
        
    <div class="row">
        <div class="col">
            <p class="text-center">{{ $result['plazo'] }}</p>
        </div>
        <div class="col">
            <p class="text-center">{{ $result['saldo_insoluto'] }}</p>
        </div>
        <div class="col">
            <p class="text-center">{{ $result['pago_mensual'] }}</p>
        </div>
        <div class="col">
            <p class="text-center">{{ $result['capital'] }}</p>
        </div>
        <div class="col">
            <p class="text-center">{{ $result['intereses'] }}</p>
        </div>
        <div class="col">
            <p class="text-center">{{ $result['iva'] }}</p>
        </div>
    </div>
    
    @endforeach
</div>

    <p><a href="{{ route ('holders.index') }}">
    Regresar a la lista de cuentahabientes</a></p>

    </p>
@endsection