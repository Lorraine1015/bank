@extends('layouts.main')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h1>Cuentahabientes</h1>
    <a href="{{route('holders.create')}}" class="btn btn-success btn-sm">
        Crear un cuentahabiente
    </a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($holders as $holder)
                <tr>
                    <td>
                        <a href="{{route('holders.show',['holder'=>$holder]) }}" class="btn btn-outline-primary btn-sm">
                            {{$holder->id}}
                        </a>
                    </td>
                    <td>{{$holder->name}}</td>
                    <td>{{$holder->lastname}}</td>
                    <td >
                        <a href="{{route('holders.edit',['holder'=>$holder]) }}" class="btn btn-outline-info btn-sm">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('holders.delete',['holder'=>$holder])}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-outline-danger btn-sm" value="Eliminar">
                        </form>
                        <!-- <a href="{{ route('holders.peticion',['holder'=>$holder]) }}">
                            Peticion de credito
                        </a>-->
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</main>
    
@endsection