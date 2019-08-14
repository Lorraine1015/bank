@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>Credito autorizado</h1>

    <p>Monto: $ {{$monto}}</p>
    <p>Mensualidad: {{$mensualidad}}</p>
    <p>Tasa: {{$tasa}} %</p>
    <p>Monto mensual: ${{$monto_mensual}} </p>
    <p>Abonos: $ {{$movement}}</p>

    <!-- Tabla de confirmacion del credito  -->
    

    <table style="text-align:center;" class="table table-striped table-sm">
        <thead>
            <tr>
                
                <th>Cuentahabiente</th>
                <th>Monto solicitado</th>
                <th>Tasa</th>
                <th>Mensualidades</th>
                <th>Monto mensual</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    
                    <td>{{ $credit['holder_id'] }}</td>
                    <td>{{ $credit['monto'] }}</td>
                    <td>{{ $credit['tasa'] }}</td>
                    <td>{{ $credit['mensualidad'] }}</td>
                    <td>{{ $credit['monto_mensual'] }}</td>
                </tr>
            
        </tbody>
    </table>
    
    <p><a href="{{ route ('holders.index') }}" class="btn btn-primary btn-sm">
    Regresar a la lista de cuentahabientes</a></p>
</main>
@endsection