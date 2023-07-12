@extends('layouts.administrador')
@section('content')
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('curriculums.create')}}" class="btn btn-primary mt-5">CREAR NUEVO CURRICULUM</a>
				<div class="table-responsive mt-5">
					<table class="table table table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>DESCRIPCION DE MANTENIMIENTO</th>
								<th>FECHA DE MANTENIMIENTO</th>
                                <th>ACCIONES</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($curriculums as $curriculum )


								<tr>
									<td>{{$curriculum->id}}</td>
									<td>{{$curriculum->description_of_maintenance}}</td>
									<td>{{$curriculum->maintenance_date}}</td>
									<td>
										<form action="{{route('curriculums.destroy', $curriculum->id)}}" method="POST">
											@method('DELETE')
											@csrf
											<a href="{{route('curriculums.show', $curriculum->id)}}" class="btn btn-sm btn-info">Detalles</a>
											<a href="{{route('curriculums.edit', $curriculum->id)}}" class="btn btn-sm btn-warning">Editar</a>
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
