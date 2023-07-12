@extends('layouts.administrador')
@section('content')

    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('equipments.create')}}" class="btn btn-primary mt-5">CREAR NUEVO EQUIPO</a>
				<div class="table-responsive mt-5">
					<table class="table table table-bordered">
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
							@foreach ($equipments as $equipment )


								<tr>
									<td>{{$equipment->id}}</td>
									<td>{{$equipment->mark}}</td>
                                    <td>{{$equipment->model}}</td>
									<td>{{$equipment->serial}}</td>

									<td>
										<form action="{{route('equipments.destroy', $equipment->id)}}" method="POST">
											@method('DELETE')
											@csrf
											<a href="{{route('equipments.show', $equipment->id)}}" class="btn btn-sm btn-info">Detalles</a>
											<a href="{{route('equipments.edit', $equipment->id)}}"class="btn btn-sm btn-warning">Editar</a>
											<button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
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
