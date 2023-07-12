@extends('layouts.administrador')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('users.update', $user->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <table class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th>NOMBRES</th>
                                <th><input type="text" class="form-control" name="name" value=""></th>
                            </tr>
                            <tr>
                                <th>CORREO</th>
                                <th><input type="text" class="form-control" name="email" value=""></th>
                            </tr>
                            <tr>
                                <th>CONTRASEÑA</th>
                                <th><input type="password" class="password" name="password" value=""></th>
                            </tr>
                            <tr>
                                <th colspan="2"><button class="btn btn-primary w-100">Actualizar info</button></th>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="{{route('users.index')}}" class="btn btn-link w-100">Cancelar</a></th>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
    @endsection
