@extends('layouts.soporte')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('requerimientos.create')}}" class="btn btn-primary mt-5 ">CREAR NUEVO REQUERIMIENTO </a>
                @csrf
                <div class="table-responsive mt-5 ">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>DESCRIPCION</td>
                                <td>FECHA MANTENIMIENTO</td>
                                <td>HORA MANTENIMIENTO</td>
                                <td>ACCION</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($requerimientos as $requerimiento)
                                <tr>
                                    <td>{{$requerimiento->id}}</td>
                                    <td>{{$requerimiento->description}}</td>
                                    <td>{{$requerimiento->maintenance_date}}</td>
                                    <td>{{$requerimiento->time_maintenance}}</td>
                                    <td>
                                        <form action="{{route('requerimientos.destroy', $requerimiento->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('requerimientos.show', $requerimiento->id)}}" class=" btn btn-sm btn-info">Detalles</a>
                                            <a href="{{route('requerimientos.edit', $requerimiento->id)}}" class=" btn btn-sm btn-warning">Editar</a>
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
