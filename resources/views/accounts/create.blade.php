@extends('layouts.main')
@section('content')
    <h1>Nueva cuenta</h1>
    <form method="POST" action="{{route('accounts.store')}}">
    @csrf
        <p>Nombre</p>
        <input type="text" value="" name="account[name]">
        <p>No de cuenta</p>
        <input type="text" value="" name="account[no_cuenta]">
        <p>Saldo</p>
        <input type="text" value="" name="account[saldo_actual]">
        <p>Cuentahabiente</p>
        <select name="account[holder_id]">
            @foreach($holders as $item)
                <option value="{{$item->id}}">
                    {{$item->name}}
                </option>
            @endforeach    
        </select>
        <input type="submit" >
    </form>
    
@endsection