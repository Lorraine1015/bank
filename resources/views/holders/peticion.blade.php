@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Peticion de credito</h1>
    <form method="GET" action="{{ route ('holders.credito',['holder'=>$holder]) }}">
    <br/>
    @csrf
        <p class="text-uppercase font-weight-bold">Monto a pedir</p>
        <input type="text"  class="form-control col-2" value="" name="monto">
        <br/>
        <p class="text-uppercase font-weight-bold">¿A cuantos meses deseas pagar?</p>
        <input type="text"  class="form-control col-2" value="" name="mensualidad">
        <br/>
        <p class="text-uppercase font-weight-bold">Tasa fija del banco:
        <p class="font-weight-light">Anual:59.40%<br/>
        Mensual C/IVA: 5.74%</p>
        <input type="hidden" value="59.40" name="tasa">
        <input type="hidden" value="{{$holder->id}}" name="credit[holder_id]">
        <br/>
        <input type="submit" class="btn btn-dark" value="Solicitar">
    </form>
    <br/>
    <p><a href="{{ route ('holders.index') }}" class="btn btn-primary btn-sm">
    Regresar a la lista de cuentahabientes</a></p>
</main>
@endsection