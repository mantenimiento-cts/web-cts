@extends('layouts.soporte')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('tickete.update', $ticket->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <table class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th>FECHA DE CREACION</th>
                                <th><input type="date" class="form-control" name="creation_date" value=""></th>
                            </tr>
                            <tr>
                                <th>HORA DE CREACION</th>
                                <th><input type="time" class="form-control" name="creation_time" value=""></th>
                            </tr>
                            <tr>
                                <th colspan="2"><button class="btn btn-primary w-100">Actualizar info</button></th>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="{{route('tickete.index')}}" class="btn btn-link w-100">Cancelar</a></th>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
    @endsection
