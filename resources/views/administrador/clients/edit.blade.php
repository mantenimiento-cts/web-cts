@extends('layouts.administrador')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('clients.update', $client->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <table class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th>NOMBRES</th>
                                <th><input type="text" class="form-control" name="names" value="{{$client->names}}"></th>
                            </tr>
                            <tr>
                                <th>APELLIDOS</th>
                                <th><input type="text" class="form-control" name="last_names" value="{{$client->last_names}}"></th>
                            </tr>
                            <tr>
                                <th>CORREO</th>
                                <th><input type="text" class="form-control" name="email" value="{{$client->email}}"></th>
                            </tr>
                            <tr>
                                <th>NUMERO DOCUMENTO</th>
                                <th><input type="text" class="form-control" name="num_doc" value="{{$client->num_doc}}"></th>
                            </tr>
                            <tr>
                                <th>NUMERO TELEFONO</th>
                                <th><input type="text" class="form-control" name="num_phone" value="{{$client->num_phone}}"></th>
                            </tr>
                            <tr>
                                <th>DIRECCION</th>
                                <th><input type="text" class="form-control" name="address" value="{{$client->address}}"></th>
                            </tr>
                            <tr>
                                <th>EMPRESA</th>
                                <th><input type="text" class="form-control" name="address" value="{{$client->company}}"></th>
                            </tr>
                            <tr>
                                <th colspan="2"><button class="btn btn-primary w-100">Actualizar info</button></th>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="{{route('clients.index')}}" class="btn btn-link w-100">Cancelar</a></th>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
    @endsection
