@extends('layouts.administrador')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('users.create')}}" class="btn btn-primary mt-5 ">CREAR NUEVO USUARIO</a>

                <div class="table-responsive mt-5 ">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>NOMBRES</td>
                                <td>CORREO</td>
                                <td>ACCION</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('users.show', $user->id)}}" class=" btn btn-sm btn-info">Detalles</a>
                                            <a href="{{route('users.edit', $user->id)}}" class=" btn btn-sm btn-warning">Editar</a>
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
    </div>
    @endsection
