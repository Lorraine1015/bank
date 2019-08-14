@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>{{$holder->id}}</h1>
    <p>Nombre: {{$holder->name}}</p>
    <p>Apellido: {{$holder->lastname}}</p>


    <h3>Cuentas</h3>

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>No. de cuenta</th> 
                <th>Saldo</th>
                <th>Movimientos</th>
                <th>Lista de movimientos</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($holder->accounts as $item)<!-- Recorre el array  -->
            <tr>
                <td>
                    {{$item ->id}}
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->no_cuenta}}</td>
                <td>$ {{$item->saldo_actual}}</td>
                    
                <td> 
                <a href="{{ route ('accountmovements.makeretiro',['account'=>$item]) }}" class="btn btn-outline-danger btn-sm"> Retiro </a>
                <a href="{{ route ('accountmovements.makeabono',['account'=>$item]) }}" class="btn btn-outline-success btn-sm"> Abono </a> </td>
                <td> <a href="{{ route ('accountmovements.maketransfer',['account'=>$item])}}" class="btn btn-outline-primary btn-sm"> Transferir </a> 
                <a href="{{ route ('accounts.show',['account'=>$item])}}" class="btn btn-outline-dark btn-sm">Lista</a> </td>
                </tr>
        @endforeach<!-- Fin del recorrido del array -->
        </tbody>
    </table>

    <h3>Creditos</h3>

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha de emision</th>
                <th>Monto solicitado</th>
                <th>Tasa</th>
                <th>Mensualidades</th>
                <th>Monto mensual</th>
            </tr>
        </thead>
        <tbody>
        @foreach($holder->credits as $item)<!-- Recorre el array  -->
            <tr>
                <td>
                {{$item ->id}}
                </td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->monto}}</td>
                <td>{{$item->tasa}}</td>
                <td>{{$item->mensualidad}}</td>
                <td>{{$item->monto_mensual}}</td>
            </tr>
        @endforeach<!-- Fin del recorrido del array -->
        </tbody>
    </table>

    <p><a href="{{ route ('holders.index') }}" class="btn btn-primary btn-sm">
    Regresar a la lista de cuentahabientes</a></p>
    <p><a href="{{ route('holders.peticion',['holder'=>$holder]) }}" class="btn btn-secondary btn-sm">
    Solicitar credito</a>
    </p>
</main>    
@endsection