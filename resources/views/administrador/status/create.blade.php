@extends('layouts.administrador')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('status.store')}}" method="POST">
                            @csrf    
                            <div class="form-group">
                                <label for="">ESTADO</label>
                                <input type="text" class="form-control" name="name" required>
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
