@extends('layouts.administrador')
@section('content')
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('requeriments.create')}}" class="btn btn-primary mt-5 ">CREAR NUEVO REQUERIMIENTO </a>
                <div class="table-responsive mt-5 ">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">DESCRIPCION</th>
                                <th scope="col">FECHA MANTENIMIENTO</th>
                                <th scope="col">HORA MANTENIMIENTO</th>
                                <th scope="col">ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($requeriments as $requeriment)
                                <tr>
                                    <td scope="row">{{$requeriment->id}}</td>
                                     <td>{{$requeriment->description}}</td>
                                     <td scope="row">{{$requeriment->maintenance_date}}</td>
                                     <td>{{$requeriment->time_maintenance}}</td>
                                    <td>
                                        <form action="{{route('requeriments.destroy', $requeriment->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('requeriments.show', $requeriment->id)}}" class=" btn btn-sm btn-info">Detalles</a>
                                            <a href="{{route('requeriments.edit', $requeriment->id)}}" class=" btn btn-sm btn-warning">Editar</a>
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
    
