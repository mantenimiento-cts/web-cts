@extends('layouts.administrador')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('status.create')}}" class="btn btn-primary mt-5 ">CREAR ESTADO </a>
                <div class="table-responsive mt-5 ">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>ESTADO</td>
                                <td>ACCION</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($status as $statu)
                                <tr>
                                    <td>{{$statu->id}}</td>
                                     <td>{{$statu->name}}</td>
                                    <td>
                                        <form action="{{route('status.destroy', $statu->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('status.show', $statu->id)}}" class=" btn btn-sm btn-info">Detalles</a>
                                            <a href="{{route('status.edit', $statu->id)}}" class=" btn btn-sm btn-warning">Editar</a>
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
