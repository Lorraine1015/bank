@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Simulador de cuenta</h1>
    <!--Metodo get para obtener los datos-->
    <form method="GET" action="{{ route ('credits.show') }}">
    <br/>
    @csrf
        <p class="text-uppercase font-weight-bold">Plazo</p>
        <input type="text" class="form-control col-2" value="" name="plazo">
        <br/>
        <p class="text-uppercase font-weight-bold">Monto</p>
        <input type="text"  class="form-control col-2" value="" name="monto">
        <br/>
        <p class="text-uppercase font-weight-bold">Tasa anual</p>
        <input type="text"  class="form-control col-2" value="" name="tasa_anual">
        <br/>
        <input type="submit"  class="btn btn-primary btn-sm" value="Calcular"><!--El submit para enviar los datos a la action-->
    </form>
</main>
@endsection