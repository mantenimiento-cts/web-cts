@extends('layouts.administrador')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('clients.create')}}" class="btn btn-outline-primary mt-5 ">CREAR NUEVO CLIENTE </a>
                <div class="table-responsive mt-5 ">
                    <table class="table table-bordered">
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

                            @foreach ($clients as $client )
            
                           
                                <tr>
                                    <td>{{$client->id}}</td>
                                    <td>{{$client->names}}</td>
                                    <td>{{$client->last_names}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->address}}</td>
                                    <td>{{$client->company}}</td>
                                    <td>
                                        <form action="{{route('clients.destroy', $client->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('clients.show', $client->id)}}" class=" btn btn-sm btn-info">Detalles</a>
                                            <a href="{{route('clients.edit', $client->id)}}" class=" btn btn-sm btn-warning">Editar</a>
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
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
