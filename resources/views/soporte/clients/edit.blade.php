@extends('layouts.soporte')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('usuarios.update', $cliente->id)}}" method="post">
                   @csrf
                   @method('PUT')
                    <table class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th>NOMBRES</th>
                                <th><input type="text" class="form-control" name="names" value=""></th>
                            </tr>
                            <tr>
                                <th>APELLIDOS</th>
                                <th><input type="text" class="form-control" name="last_names" value=""></th>
                            </tr>
                            <tr>
                                <th>CORREO</th>
                                <th><input type="text" class="form-control" name="email" value=""></th>
                            </tr>
                            <tr>
                                <th>NUMERO DOCUMENTO</th>
                                <th><input type="text" class="form-control" name="address" value=""></th>
                            </tr>
                            <tr>
                                <th>NUMERO TELEFONO</th>
                                <th><input type="text" class="form-control" name="address" value=""></th>
                            </tr>
                            <tr>
                                <th>DIRECCION</th>
                                <th><input type="text" class="form-control" name="address" value=""></th>
                            </tr>
                            <tr>
                                <th>EMPRESA</th>
                                <th><input type="text" class="form-control" name="address" value=""></th>
                            </tr>
                            <tr>
                                <th colspan="2"><button class="btn btn-primary w-100">Actualizar info</button></th>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="{{route('clientes.index')}}" class="btn btn-link w-100">Cancelar</a></th>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
    @endsection
