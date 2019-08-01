<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevos movimientos</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nueva transferencia</h1>
    <form method="POST" action="{{route('accountmovements.transferPost',['account'=>$account])}}">
    @csrf
        <p>Cuenta:</p>
        {{$account->id}}
        {{$account->name}}
        {{$account->no_cuenta}}
        $ {{$account->saldo_actual}}
        <!--CUENTA 1 DATOS PARA RETIRAR-->
        <input type="hidden" value="{{$account->id}}" name="account_id">
        <input type="hidden" value="{{$account->holder_id}}" name="holder_id">

        <!--CUENTA 2 DATOS PARA ABONAR-->
        <p>Cuenta a transferir</p>
        <select name="account_id2">
            @foreach($accounts as $item)
            @if($account->holder_id != $item->holder_id)<!--Condicional para colocar solo las cuentas diferentes al del holder-->
                <option value="{{$item->id}}">
                    {{$item->name}}
                    {{$item->no_cuenta}}   
                </option>
            @endif
            @endforeach    
        </select>
        

        <h2>¿Cuanto quieres transferir?</h2>
        <p>Cantidad</p>
        <input type="text" value="" name="cantidad">
        <p>Referencia</p>
        <input type="text" value="" name="referencia">
    
        <input type="submit" value="Transferir">
    </form>
    <p><a href="{{ route ('holders.index') }}">
    Regresar a la lista de cuentahabientes</a></p>
    
</body>
</html> 