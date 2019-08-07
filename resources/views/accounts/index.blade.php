@extends('layouts.main')
@section('content')

    <h1>Cuenta</h1>
    <a href="{{route('accounts.create')}}">
    Crear una cuenta
    </a>
    <table>
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
                        <a href="{{route('accounts.show',['account'=>$account]) }}">
                            {{$account->id}}
                        </a>
                    </td>
                    <td>{{$account->name}}</td>
                    <td>{{$account->holder->name}}</td>
                    <td>{{$account->no_cuenta}}</td>
                    <td>{{$account->saldo_actual}}</td>
                    <td>
                        <a href="{{route('accounts.edit',['account'=>$account]) }}">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('accounts.delete',['account'=>$account])}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
