@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Editar cuentahabiente</h1>
    <form method="POST"  action="{{route('holders.update',['holder'=>$holder])}}"><!-- Se acciona junto con la funcion.update,su argumento -->
    <br/>
        @csrf 
        {{method_field('PUT')}}
        <p class="text-uppercase font-weight-bold">Nombre</p>
        <input type="text" class="form-control col-2"  value="{{$holder->name}}" name="holder[name]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <br/>
        <p class="text-uppercase font-weight-bold">Apellido</p>
        <input type="text" class="form-control col-2" value="{{$holder->lastname}}" name="holder[lastname]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <br/>
        <input type="submit" class="btn btn-primary btn-sm" value="Editar">
    </form>
</main>
@endsection