@extends('layouts.main')
@section('content')
    <h1>Editar cuenta</h1>
    <form method="POST"  action="{{route('accounts.update',['account'=>$account])}}"><!-- Se acciona junto con la funcion.update,su argumento -->
        @csrf 
        {{method_field('PUT')}}
        <p>Nombre</p>
        <input type="text" value="{{$account->name}}" name="account[name]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <p>No. de cuenta</p>
        <input type="text" value="{{$account->no_cuenta}}" name="account[no_cuenta]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <p>Saldo</p>
        <input type="text" value="{{$account->saldo_actual}}" name="account[saldo_actual]">
        <input type="submit" value="Editar">
    </form>
@endsection