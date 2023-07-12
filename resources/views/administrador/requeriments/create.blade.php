@extends('layouts.administrador')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('requeriments.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">DESCRIPCION</label>
                                <input type="text" class="form-control" name="description" required>
                            </div>
                            <div class="form-group">
                                <label for="">DIA DE MANTENIMIENTO</label>
                                <input type="text" class="form-control" name="maintenance_date" required>
                            </div>
                            <div class="form-group">
                                <label for="">HORA MANTENIMIENTO</label>
                                <input type="text" class="form-control" name="time_maintenance" required>
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
