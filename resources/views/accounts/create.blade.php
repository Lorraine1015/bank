<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevas cuentas</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nueva cuenta</h1>
    <form method="POST" action="{{route('accounts.store')}}">
    @csrf
        <p>Nombre</p>
        <input type="text" value="" name="account[name]">
        <p>No de cuenta</p>
        <input type="text" value="" name="account[no_cuenta]">
        <p>Saldo</p>
        <input type="text" value="" name="account[saldo_actual]">
        <input type="submit" >
    </form>

</body>
</html> 