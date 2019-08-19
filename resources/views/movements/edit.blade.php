@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Editar movimiento</h1>
    <form method="POST"  action="{{route('movements.update',['movement'=>$movement])}}"><!-- Se acciona junto con la funcion.update,su argumento -->
    <br/>
        @csrf 
        {{method_field('PUT')}}
        <p class="text-uppercase font-weight-bold">Tipo</p>
        <select name="movement[type]" class="form-control col-2 form-control-sm" >
            <option value="Retiro">Retiro</option>
            <option value="Abono">Abono</option>
        </select>
        <br/>
        <p class="text-uppercase font-weight-bold">Cantidad</p>
        <input type="text"  class="form-control col-2" value="{{$movement->cantidad}}" name="movement[cantidad]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <br/>
        <p class="text-uppercase font-weight-bold">Referencia</p>
        <input type="text" class="form-control col-2" value="{{$movement->referencia}}" name="movement[referencia]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <br/>
        <input type="submit"  class="btn btn-primary btn-sm" value="Editar">
    </form>
</main>
@endsection