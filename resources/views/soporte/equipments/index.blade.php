@extends('layouts.soporte')
@section('content')
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('equipos.create')}}" class="btn btn-primary mt-5">CREAR NUEVO EQUIPO</a>
				<div class="table-responsive mt-5">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>MARCA</th>
								<th>MODELO</th>
								<th>SERIAL</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($equipos as  $equipo)


								<tr>
									<td>{{$equipo->id}}</td>
									<td>{{$equipo->mark}}</td>
                                    <td>{{$equipo->model}}</td>
									<td>{{$equipo->serial}}</td>

									<td>
										<form action="{{route('equipos.destroy', $equipo->id)}}" method="POST">
											@method('DELETE')
											@csrf
											<a href="{{route('equipos.show', $equipo->id)}}" class="btn btn-sm btn-info">Detalles</a>
											<a href="{{route('equipos.edit', $equipo->id)}}"class="btn btn-sm btn-warning">Editar</a>
										</form>
									</td>
								</tr>
                                @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	@endsection