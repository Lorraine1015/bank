@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Nuevo cuentahabiente</h1>
    <form method="POST" action="{{route('holders.store')}}">
    <br/>
    @csrf
        <p class="text-uppercase font-weight-bold">Nombre</p>
        <input type="text" class="form-control col-2" value="" name="holder[name]">
        <br/>
        <p class="text-uppercase font-weight-bold">Apellido</p>
        <input type="text" class="form-control col-2" value="" name="holder[lastname]">
        <br/>
        <input type="submit" class="btn btn-primary btn-sm" >
    </form>
</main>
@endsection