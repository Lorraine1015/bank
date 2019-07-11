@extends('layouts.main')
@section('content')
<p>Plazo:</p>
<p>Monto:</p>
<p>Tasa Anual:</p>

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
    <div class="row">
        <div class="col">
            <p class="text-center">cantidad</p>
        </div>
        <div class="col">
            <p class="text-center">cantidad</p>
        </div>
        <div class="col">
            <p class="text-center">cantidad</p>
        </div>
        <div class="col">
            <p class="text-center">cantidad</p>
        </div>
        <div class="col">
            <p class="text-center">cantidad</p>
        </div>
        <div class="col">
            <p class="text-center">cantidad</p>
        </div>
    </div>
</div>

    <p><a href="{{ route ('holders.index') }}">
    Regresar a la lista de cuentahabientes</a></p>

    </p>
@endsection