@extends('layouts.administrador')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('curriculums.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">DESCRIPCION DE MANTENIMIENTO</label>
                                <textarea class="form-control" name="description_of_maintenance" required placeholder="INGRESAR DESCRIPCION DE MANTENIMIENTO"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">FECHA</label>
                                <input type="date" class="form-control" name="maintenance_date" required placeholder="INGRESAR FECHA DE MANTENIMIENTO">
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
