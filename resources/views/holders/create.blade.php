@extends('layouts.main')
@section('content')
    <h1>Nuevo cuentahabiente</h1>
    <form method="POST" action="{{route('holders.store')}}">
    @csrf
        <p>Nombre</p>
        <input type="text" value="" name="holder[name]">
        <p>Apellido</p>
        <input type="text" value="" name="holder[lastname]">
        <input type="submit" >
    </form>

@endsection