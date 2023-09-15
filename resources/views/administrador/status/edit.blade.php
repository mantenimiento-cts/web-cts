@extends('layouts.administrador')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('status.update', $statu->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <table class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ESTADO</th>
                                <th><input type="text" class="form-control" name="name" value="{{$statu->name}}"></th>
                            </tr>

                            <tr>
                                <th colspan="2"><button class="btn btn-primary w-100">Actualizar info</button></th>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="{{route('status.index')}}" class="btn btn-link w-100">Cancelar</a></th>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
    @endsection
