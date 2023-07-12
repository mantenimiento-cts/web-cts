@extends('layouts.administrador')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm">
                    <tr>
                        <th>NOMBRES</th>
                        <td>{{$user->name}}</td>
                    </tr>

                    <tr>
                        <th>CORREO</th>
                        <td>{{$user->email}}</td>
                    </tr>
                    
                    <tr>
                        <th>CONTRASEÑA</th>
                        <td>{{$user->password}}</td>
                    </tr>
                </table>
                <a href="{{route('users.index')}}" class="btn btn-info">VOLVER AL INICIO</a>
            </div>
        </div>
    </div>
    @endsection
