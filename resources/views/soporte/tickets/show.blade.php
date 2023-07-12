@extends('layouts.soporte')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{$ticket->id}}</td>
                    </tr>
                    <tr>
                        <th>FECHA CREACION</th>
                        <td>{{$ticket->creation_date}}</td>
                    </tr>
                    <tr>
                        <th>HORA CREACION</th>
                        <td>{{$ticket->creation_time}}</td>
                    </tr>
                </table>
                <a href="{{route('tickete.index')}}" class="btn btn-info">VOLVER AL INICIO</a>
            </div>
        </div>
    </div>
    @endsection
