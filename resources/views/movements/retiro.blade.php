@extends('layouts.main')
@section('content')
    <h1>Nuevo retiro</h1>
    <form method="POST" action="{{route('accountmovements.retiro',['account'=>$account])}}">
    @csrf
        <p>Cuenta:</p>
        {{$account->id}}
        {{$account->name}}
        {{$account->no_cuenta}}
        $ {{$account->saldo_actual}}
        <input type="hidden" value="{{$account->holder_id}}" name="movement[holder_id]">
        <input type="hidden" value="Retiro" name="movement[type]">
        <input type="hidden" value="{{$account->id}}" name="movement[account_id]">
        <h2>¿Cuanto quieres retirar?</h2>
        <p>Cantidad</p>
        <input type="text" value="" name="movement[cantidad]">
        <p>Referencia</p>
        <input type="text" value="" name="movement[referencia]">
    
        <input type="submit" >
    </form>

@endsection