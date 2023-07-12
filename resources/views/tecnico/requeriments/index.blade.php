@extends('layouts.tecnico')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="" class="btn btn-primary mt-5 ">CREAR NUEVO REQUERIMIENTO </a>
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
                            @foreach($requeriments as $requeriment)
                                <tr>
                                    <td>{{$requeriment->id}}</td>
                                    <td>{{$requeriment->description}}</td>
                                    <td>{{$requeriment->maintenance_date}}</td>
                                    <td>{{$requeriment->time_maintenance}}</td>
                                    <td>
                                        <form action="" method="POST">
                                            @csrf
                                            <a href="{{route('requerimentoos.show', $requeriment->id)}}" class=" btn btn-sm btn-info">Detalles</a>
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
