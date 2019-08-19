@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Nueva cuenta</h1> 
    <br/>
    <form method="POST" action="{{route('accounts.store')}}">
    @csrf
        <p class="text-uppercase font-weight-bold">Nombre</p>
        <input type="text" class="form-control col-2" value="" name="account[name]">
        <br/>
        <p class="text-uppercase font-weight-bold">No de cuenta</p>
        <input type="text" class="form-control col-2" value="" name="account[no_cuenta]">
        <br/>
        <p class="text-uppercase font-weight-bold">Saldo</p>
        <input type="text"  class="form-control col-2" value="" name="account[saldo_actual]">
        <br/>
        <p class="text-uppercase font-weight-bold">Cuentahabiente</p>
        <select name="account[holder_id]" class="form-control col-2 form-control-sm">
            @foreach($holders as $item)
                <option value="{{$item->id}}">
                    {{$item->name}}
                </option>
            @endforeach    
        </select>
        <br/>
        <input type="submit" class="btn btn-primary btn-sm" >
    </form>
</main>
@endsection