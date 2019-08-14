@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Cuentas</h1>
    <a href="{{route('accounts.create')}}" class="btn btn-success btn-sm">
    Crear una cuenta
    </a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Cuentahabiente</th>
                <th>No. de cuenta</th>
                <th>Saldo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accounts as $account)
                <tr>
                    <td>
                        <a href="{{route('accounts.show',['account'=>$account]) }}" class="btn btn-outline-primary btn-sm">
                            {{$account->id}}
                        </a>
                    </td>
                    <td>{{$account->name}}</td>
                    <td>{{$account->holder->name}}</td>
                    <td>{{$account->no_cuenta}}</td>
                    <td>{{$account->saldo_actual}}</td>
                    <td>
                        <a href="{{route('accounts.edit',['account'=>$account]) }}" class="btn btn-outline-info btn-sm">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('accounts.delete',['account'=>$account])}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-outline-danger btn-sm" value="Eliminar">
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
