@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Nueva transferencia</h1>
    @if ($errors->any())<!-- Si existe un error en la peticion,me despliega un mensaje junto con el ACCOUNTSMOVEMENTSCONTROLLER  -->
        {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
    @endif
    <form method="POST" action="{{route('accountmovements.transferPost',['account'=>$account])}}">
    @csrf
        <p class="font-weight-light">
        {{$account->id}}
        {{$account->name}}
        {{$account->no_cuenta}}
        $ {{$account->saldo_actual}}</p>
        <!--CUENTA 1 DATOS PARA RETIRAR-->
        <input type="hidden" value="{{$account->id}}" name="account_id">
        <input type="hidden" value="{{$account->holder_id}}" name="holder_id">
        <br/>
        <!--CUENTA 2 DATOS PARA ABONAR-->
        <p class="text-uppercase font-weight-bold">Cuenta a transferir</p>
        <select name="account_id2" class="form-control col-4 form-control-sm">
            @foreach($accounts as $item)
            @if($account->holder_id != $item->holder_id)<!--Condicional para colocar solo las cuentas diferentes al del holder-->
                <option value="{{$item->id}}">
                    {{$item->name}}
                    {{$item->no_cuenta}}   
                </option>
            @endif
            @endforeach    
        </select>
        <br/>
        <p class="text-uppercase font-weight-bold">Cantidad</p>
        <input type="text" class="form-control col-2" value="" name="cantidad">
        <br/>
        <p class="text-uppercase font-weight-bold">Referencia</p>
        <input type="text" class="form-control col-3" value="" name="referencia">
        <br/>
        <input type="submit" class="btn btn-info" value="Transferir">
    </form>
</main>
@endsection 