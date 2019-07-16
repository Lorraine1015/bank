<!--Seccion de Layout-->
@extends('layouts.main')
<!--Seccion de php-->
<!-- Se le impone el valor de la tasa mensual en porcentaje en $tasaMensual-->
@php

function an_iva($a){
    return $a * 1.16;
}
function men_iva($a){
    return $a / 12;
}

$tasaMensual= (an_iva($tasa_anual)/12)/100;

function pago_men($a,$b,$c){
    return ( $a * -$b *((1 + $a)** $c)/(1-((1 + $a)** $c))); 
}

@endphp


@section('content')
<p>Plazo:</p>{{ $plazo }}<!--Forma de llamar la variable -->
<p>Monto:</p>{{ $monto }}
<p>Tasa Anual:</p>{{ $tasa_anual }}
<p>Tasa Anual c/IVA:</p>{{ an_iva($tasa_anual) }}
<p>Tasa Mensual s/IVA:</p>{{ men_iva($tasa_anual) }}
<p>Tasa Mensual c/IVA:</p>{{ an_iva($tasa_anual)/12 }}
<p>Pago Mensual:</p>{{ pago_men($tasaMensual,$monto,$plazo) }}

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