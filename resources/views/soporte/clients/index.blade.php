@extends('layouts.soporte')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('clientes.create')}}" class="btn btn-primary mt-5 ">CREAR NUEVO CLIENTE </a>
                <div class="table-responsive mt-5 ">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>NOMBRES</td>
                                <td>APELLIDOS</td>
                                <td>CORREO</td>
                                <td>DIRECCION</td>
                                <td>EMPRESA</td>
                                <td>ACCION</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)


                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->names}}</td>
                                    <td>{{$cliente->last_names}}</td>
                                    <td>{{$cliente->email}}</td>
                                    <td>{{$cliente->address}}</td>
                                    <td>{{$cliente->company}}</td>
                                    <td>
                                        <form action="{{route('clientes.destroy', $cliente->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('clientes.show', $cliente->id)}}" class=" btn btn-sm btn-info">Detalles</a>
                                            <a href="{{route('clientes.edit', $cliente->id)}}" class=" btn btn-sm btn-warning">Editar</a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
