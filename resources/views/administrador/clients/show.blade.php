@extends('layouts.administrador')
@section('content')
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered mt-4">
                    <tr>
                        <th>NOMBRES</th>
                        <td>{{$client->id}}</td>
                    </tr>
                    <tr>
                        <th>NOMBRES</th>
                        <td>{{$client->names}}</td>
                    </tr>
                    <tr>
                        <th>APELLIDOS</th>
                        <td>{{$client->last_names}}</td>
                    </tr>
                    <tr>
                        <th>DOCUMENTO</th>
                        <td>{{$client->num_doc}}</td>
                    </tr>
                    <tr>
                        <th>TELEFONO</th>
                        <td>{{$client->num_phone}}</td>
                    </tr>
                    <tr>
                        <th>CORREO</th>
                        <td>{{$client->email}}</td>
                    </tr>
                    <tr>
                        <th>DIRECCION</th>
                        <td>{{$client->address}}</td>
                    </tr>
                    <tr>
                        <th>EMPRESA</th>
                        <td>{{$client->company}}</td>
                    </tr>
                    <tr>
                        
                </table>
                <a href="{{route('clients.index')}}" class="btn btn-info">VOLVER AL INICIO</a>
            </div>
        </div>
    </div>
    @endsection

