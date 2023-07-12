@extends('layouts.soporte')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('clientes.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">NOMBRES</label>
                                <input type="text" class="form-control" name="names" required>
                            </div>
                            <div class="form-group">
                                <label for="">APELLIDOS</label>
                                <input type="text" class="form-control" name="last_names" required>
                            </div>
                            <div class="form-group">
                                <label for="">CORREO</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="">NUMERO DOCUMENTO</label>
                                <input type="text" class="form-control" name="num_doc" required>
                            </div>
                            <div class="form-group">
                                <label for="">NUMERO DE TELEFONO</label>
                                <input type="text" class="form-control" name="num_phone" required>
                            </div>
                            <div class="form-group">
                                <label for="">DIRECCION</label>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                            <div class="form-group">
                                <label for="">EMPRESA</label>
                                <input type="text" class="form-control" name="company" required>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">GUARDAR</button>
                            <a href="" class="btn btn-link">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection