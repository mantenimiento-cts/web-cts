@extends('layouts.administrador')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{$curriculum->id}}</td>
                    </tr>
                    <tr>
                        <th>DESCRIPCION DE MANTENIMIENTO</th>
                        <td>{{$curriculum->description_of_maintenance}}</td>
                    </tr>
                    <tr>
                        <th>FECHA DE MANTENIMIENTO</th>
                        <td>{{$curriculum->maintenance_date}}</td>
                    </tr>

                </table>
                <a href="{{route('curriculums.index')}}" class="btn btn-info">VOLVER AL INICIO</a>
            </div>
        </div>
    </div>
    @endsection
