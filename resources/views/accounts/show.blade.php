@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>{{$account->id}}</h1>
    <p class="font-weight-light">Nombre: {{$account->name}}</p>
    <p class="font-weight-light">No. de cuenta: {{$account->no_cuenta}}</p>
    <p class="font-weight-light">Saldo: ${{$account->saldo_actual}}</p>

    <h3>Movimientos</h3>

<table class="table table-striped table-sm"> 
    <thead>
        <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th>Referencia</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($account->movements as $item)<!-- Recorre el array  -->
            <tr>
                <td>
                {{$item ->id}}
                </td>
                <td>{{$item->type}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->referencia}}</td>
            </tr>
        @endforeach<!-- Fin del recorrido del array -->
    </tbody>
</table>
    <p><a href="{{ route ('holders.index') }}" class="btn btn-primary btn-sm">
    Regresar a la lista de cuentahabientes</a>
    </p>
    <p><a href="{{ route ('accounts.index') }}" class="btn btn-secondary btn-sm">
    Regresar a la lista de cuentas</a>
    </p>
</main>
@endsection
