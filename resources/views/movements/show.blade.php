@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>{{$movement->id}}</h1>
    <p>No.cuenta: {{$movement->account->no_cuenta}}</p>
    <p>Tipo: {{$movement->type}}</p>
    <p>Cantidad: ${{$movement->cantidad}}</p>
    <p>Referencia: {{$movement->referencia}}</p>
    <p><a href="{{ route ('movements.index') }}" class="btn btn-primary btn-sm">
    Regresar a la lista de movimientos</a>
    </p>
</main>
@endsection