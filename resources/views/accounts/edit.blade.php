@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Editar cuenta</h1>
    <form method="POST"  action="{{route('accounts.update',['account'=>$account])}}"><!-- Se acciona junto con la funcion.update,su argumento -->
    <br/>
        @csrf 
        {{method_field('PUT')}}
        <p class="text-uppercase font-weight-bold">Nombre</p>
        <input type="text" class="form-control col-2" value="{{$account->name}}" name="account[name]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <br/>
        <p class="text-uppercase font-weight-bold">No. de cuenta</p>
        <input type="text" class="form-control col-2" value="{{$account->no_cuenta}}" name="account[no_cuenta]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <br/>
        <p class="text-uppercase font-weight-bold">Saldo</p>
        <input type="text" class="form-control col-2" value="{{$account->saldo_actual}}" name="account[saldo_actual]">
        <br/>
        <input type="submit"  class="btn btn-primary btn-sm" value="Editar">
    </form>
</main>
@endsection