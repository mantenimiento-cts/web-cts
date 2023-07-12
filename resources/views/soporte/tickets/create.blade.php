@extends('layouts.soporte')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('tickete.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">FECHA DE CREACION</label>
                                <input type="text" class="form-control" name="creation_date" required>
                            </div>
                            <div class="form-group">
                                <label for="">HORA DE CREACION</label>
                                <input type="text" class="form-control" name="creation_time" required>
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
