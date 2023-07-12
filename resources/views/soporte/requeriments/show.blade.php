@extends('layouts.soporte')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{$requerimiento->id}}</td>
                    </tr>
                    <tr>
                        <th>DESCRIPCION</th>
                        <td>{{$requerimiento->description}}</td>
                    </tr>
                    <tr>
                        <th>FECHA DE MANTENIMIENTO</th>
                        <td>{{$requerimiento->maintenance_date}}</td>
                    </tr>
                    <tr>
                        <th>HORA DE MANTENIMIENTO</th>
                        <td>{{$requerimiento->time_maintenance}}</td>
                    </tr>
                </table>
                <a href="{{route('requerimientos.index')}}" class="btn btn-info">VOLVER AL INICIO</a>
            </div>
        </div>
    </div>
    @endsection
