@extends('layouts.administrador')
@section('content')
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{$statu->id}}</td>
                    </tr>
                    <tr>
                        <th>DESCRIPCION</th>
                        <td>{{$statu->name}}</td>
                    </tr>
                </table>
                <a href="{{route('status.index')}}" class="btn btn-info">VOLVER AL INICIO</a>
            </div>
        </div>
    </div>
    @endsection
