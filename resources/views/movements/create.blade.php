@extends('layouts.main')
@section('content')
    <h1>Nuevo movimiento</h1>
    <form method="POST" action="{{route('movements.store')}}">
    @csrf
        <p>Cuentahabiente</p>
        <select name="movement[holder_id]">
            @foreach($holders as $item)
                <option value="{{$item->id}}">
                    {{$item->name}}
                </option>
            @endforeach    
        </select>
        <p>Cuenta</p>
        <select name="movement[account_id]">
            @foreach($accounts as $item)
                <option value="{{$item->id}}">
                    {{$item->name}}
                    {{$item->no_cuenta}}
                </option>
            @endforeach    
        </select> 
        <p>Tipo</p>
        <select name="movement[type]" >
            <option value="Retiro">Retiro</option>
            <option value="Abono">Abono</option>
        </select>
        <p>Cantidad</p>
        <input type="text" value="" name="movement[cantidad]">
        <p>Referencia</p>
        <input type="text" value="" name="movement[referencia]">
    
        <input type="submit" >
    </form>

@endsection
