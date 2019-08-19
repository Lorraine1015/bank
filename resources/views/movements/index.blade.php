@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Movimientos</h1>
    <a href="{{route('movements.create')}}" class="btn btn-success btn-sm">
    Crear un movimiento
    </a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cuentahabiente</th>
                <th>Cuenta</th>
                <th>Tipo</th>
                <th>Cantidad</th>
                <th>Referencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movements as $movement)
                <tr>
                    <td>
                        <a href="{{route('movements.show',['movement'=>$movement]) }}" class="btn btn-outline-primary btn-sm">
                            {{$movement->id}}
                        </a>
                    </td>
                    <td>{{$movement->holder->name}}</td>
                    <td>{{$movement->account->no_cuenta}}</td>
                    <td>{{$movement->type}}</td>
                    <td>{{$movement->cantidad}}</td>
                    <td>{{$movement->referencia}}</td>
                    <td>
                        <a href="{{route('movements.edit',['movement'=>$movement]) }}" class="btn btn-outline-info btn-sm">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('movements.delete',['movement'=>$movement])}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-outline-danger btn-sm"  value="Eliminar">
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection