@extends('layouts.administrador')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{$requeriment->id}}</td>
                    </tr>
                    <tr>
                        <th>DESCRIPCION</th>
                        <td>{{$requeriment->description}}</td>
                    </tr>
                    <tr>
                        <th>FECHA DE MANTENIMIENTO</th>
                        <td>{{$requeriment->maintenance_date}}</td>
                    </tr>
                    <tr>
                        <th>HORA DE MANTENIMIENTO</th>
                        <td>{{$requeriment->time_maintenance}}</td>
                    </tr>
                </table>
                <a href="{{route('requeriments.index')}}" class="btn btn-info">VOLVER AL INICIO</a>
            </div>
        </div>
    </div>
    @endsection
   