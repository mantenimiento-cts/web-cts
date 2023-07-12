@extends('layouts.soporte')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('tickete.create')}}" class="btn btn-primary mt-5 ">CREAR NUEVO TICKET</a>

                <div class="table-responsive mt-5 ">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>FECHA CREACION</td>
                                <td>HORA CREACION</td>
                                <td>ACCION</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{$ticket->id}}</td>
                                    <td>{{$ticket->creation_date}}</td>
                                    <td>{{$ticket->creation_time}}</td>
                                    <td>
                                        <form action="{{route('tickete.destroy', $ticket->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('tickete.show', $ticket->id)}}" class=" btn btn-sm btn-info">Detalles</a>
                                            <a href="{{route('tickete.edit', $ticket->id)}}" class=" btn btn-sm btn-warning">Editar</a>
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