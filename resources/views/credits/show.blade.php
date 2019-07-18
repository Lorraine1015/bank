<!--Seccion de Layout-->
@extends('layouts.main')
<!--Seccion de php-->
<!-- Se le impone el valor de la tasa mensual en porcentaje en $tasaMensual-->
<!--Se declara variables dentro de las funciones para manejar funciones anidadas -->
<!--round es una funcion que redondea un float round(numero,precision)-->
@php

function an_iva($tasa_anual){
    return $tasa_anual * 1.16;
}
function men_iva($tasa_anual){
    return $tasa_anual / 12;
}

$tasaMensual= (an_iva($tasa_anual)/12)/100;
$tasaMenSIVA=(men_iva($tasa_anual)/100);


function pago_men($tasaMensual,$monto,$plazo){
    return ( $tasaMensual * -$monto *((1 + $tasaMensual)** $plazo)/(1-((1 + $tasaMensual)** $plazo))); 
}

$pagoMensual=(pago_men($tasaMensual,$monto,$plazo));



function interes($monto,$iterador,$tasa_anual,$plazo){
    $tasaMenSIVA=(men_iva($tasa_anual)/100);
    if($iterador==1){
        return round($monto * $tasaMenSIVA, 2);
    } else 
    {
        return round(saldo_inso($monto,$iterador-1,$tasa_anual, $plazo)* $tasaMenSIVA, 2);
    }
}

function plazo($iterador){   
    return $iterador;
}
function saldo_inso($monto,$iterador,$tasa_anual,$plazo){
    $capital_1 = capital($monto,$iterador,$tasa_anual,$plazo);
    if($iterador==1){
        
        return round($monto - $capital_1, 2);
        
    }else
    {
        return round(saldo_inso($monto,$iterador-1,$tasa_anual, $plazo) - $capital_1, 2);
    }

}
function capital($monto,$iterador,$tasa_anual,$plazo){
    
    $tasaMensual= (an_iva($tasa_anual)/12)/100;
    $pagoMensual=(pago_men($tasaMensual,$monto,$plazo));
    $int= interes($monto,$iterador,$tasa_anual,$plazo);
    $iva= IVA($monto,$iterador,$tasa_anual,$plazo);        
    return round($pagoMensual - $int - $iva , 2);
    
}
function IVA($monto,$iterador,$tasa_anual,$plazo){
        $int = interes($monto,$iterador,$tasa_anual,$plazo);
        return round($int * 0.16,2);
    
}

@endphp


@section('content')
<p>Plazo:</p>{{ $plazo }}<!--Forma de llamar la variable function-->
<p>Monto:</p>{{ $monto }}
<p>Tasa Anual:</p>{{ $tasa_anual }}
<p>Tasa Anual c/IVA:</p>{{ an_iva($tasa_anual) }}<!--Forma de llamar la funcion junto con su parametro-->
<p>Tasa Mensual s/IVA:</p>{{ men_iva($tasa_anual) }}
<p>Tasa Mensual c/IVA:</p>{{ an_iva($tasa_anual)/12 }}
<p>Pago Mensual:</p>{{ pago_men($tasaMensual,$monto,$plazo) }}

<div class="container"> 
    <div class="row"><!--Titulos de la tabla-->
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

    
    @for($i=1;$i<=$plazo;$i++)<!--Bucle que me itera las filas hasta llegar al plazo-->
        
    <div class="row">
        <div class="col">
            <p class="text-center">{{plazo($i)}}</p><!--Iterador numerico sencillo-->
        </div>
        <div class="col"><!--Se manda a llamar las funciones,junto con sus parametros usados en los calculos-->
            <p class="text-center">{{saldo_inso($monto,$i,$tasa_anual,$plazo)}}</p>
        </div>
        <div class="col">
            <p class="text-center">{{pago_men($tasaMensual,$monto,$plazo)}}</p>
        </div>
        <div class="col">
            <p class="text-center">{{capital($monto,$i,$tasa_anual,$plazo)}}</p>
        </div>
        <div class="col">
            <p class="text-center">{{ interes($monto,$i,$tasa_anual,$plazo) }}</p>
        </div>
        <div class="col">
            <p class="text-center">{{IVA($monto,$i,$tasa_anual,$plazo)}}</p>
        </div>
    </div>
    
    @endfor
</div>

    <p><a href="{{ route ('holders.index') }}">
    Regresar a la lista de cuentahabientes</a></p>

    </p>
@endsection