@extends('layouts.soporte')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm">
                    <tr>
                        <th>NOMBRES</th>
                        <td>{{$cliente->names}}</td>
                    </tr>
                    <tr>
                        <th>APELLIDOS</th>
                        <td>{{$cliente->last_names}}</td>
                    </tr>
                    <tr>
                        <th>CORREO</th>
                        <td>{{$cliente->email}}</td>
                    </tr>
                    <tr>
                        <th>NUMERO DE DOCUMENTO</th>
                        <td>{{$cliente->num_doc}}</td>
                    </tr>
                    <tr>
                        <th>NUMERO DE TELEFONO</th>
                        <td>{{$cliente->num_phone}}</td>
                    </tr>
                    <tr>
                        <th>DIRECCION</th>
                        <td>{{$cliente->address}}</td>
                    </tr>
                    <tr>
                        <th>EMPRESA</th>
                        <td>{{$cliente->company}}</td>
                    </tr>
                </table>
                <a href="{{route('clientes.index')}}" class="btn btn-info">VOLVER AL INICIO</a>
            </div>
        </div>
    </div>
    @endsection
