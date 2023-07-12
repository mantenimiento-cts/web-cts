@extends('layouts.soporte')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('curriculum.update', $curriculum->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <table class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th>DESCRIPCION DE MANTENIMIENTO</th>
                                <th><textarea name="description_of_maintenance" id="" cols="30" rows="3" class="form-control"></textarea></th>
                            </tr>
                            <tr>
                                <th>FECHA DE MANTENIMIENTO</th>
                                <th><input type="text" class="form-control" name="maintenance_date" value=""></th>
                            </tr>
                            <tr>
                                <th colspan="2"><button class="btn btn-primary w-100">Actualizar info</button></th>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="{{route('curriculum.index')}}" class="btn btn-link w-100">Cancelar</a></th>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
