@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Nuevo movimiento</h1>
    <form method="POST" action="{{route('movements.store')}}">
    <br/>
    @csrf
        <p class="text-uppercase font-weight-bold">Cuentahabiente</p>
        <select name="movement[holder_id]" class="form-control col-2 form-control-sm">
            @foreach($holders as $item)
                <option value="{{$item->id}}">
                    {{$item->name}}
                </option>
            @endforeach    
        </select>
        <br/>
        <p class="text-uppercase font-weight-bold">Cuenta</p>
        <select name="movement[account_id]" class="form-control col-3 form-control-sm">
            @foreach($accounts as $item)
                <option value="{{$item->id}}">
                    {{$item->name}}
                    {{$item->no_cuenta}}
                </option>
            @endforeach    
        </select> 
        <br/>
        <p class="text-uppercase font-weight-bold">Tipo</p>
        <select name="movement[type]" class="form-control col-2 form-control-sm">
            <option value="Retiro">Retiro</option>
            <option value="Abono">Abono</option>
        </select>
        <br/>
        <p class="text-uppercase font-weight-bold">Cantidad</p>
        <input type="text" class="form-control col-2" value="" name="movement[cantidad]">
        <br/>
        <p class="text-uppercase font-weight-bold">Referencia</p>
        <input type="text" class="form-control col-2" value="" name="movement[referencia]">
        <br/>
        <input type="submit" class="btn btn-primary btn-sm" >
    </form>
</main>
@endsection
