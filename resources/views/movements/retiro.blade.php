@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Nuevo retiro</h1>
    <form method="POST" action="{{route('accountmovements.retiro',['account'=>$account])}}">
    @csrf
        <p class="font-weight-light">
        {{$account->id}}
        {{$account->name}}
        {{$account->no_cuenta}}
        $ {{$account->saldo_actual}}</p>
        <br/>
        <input type="hidden" value="{{$account->holder_id}}" name="movement[holder_id]">
        <input type="hidden" value="Retiro" name="movement[type]">
        <input type="hidden" value="{{$account->id}}" name="movement[account_id]">

        <p class="text-uppercase font-weight-bold">Cantidad</p>
        <input type="text" class="form-control col-2" value="" name="movement[cantidad]">
        <br/>
        <p class="text-uppercase font-weight-bold">Referencia</p>
        <input type="text" class="form-control col-3" value="" name="movement[referencia]">
        <br/>
        <input type="submit" class="btn btn-danger" >
    </form>
</main>
@endsection