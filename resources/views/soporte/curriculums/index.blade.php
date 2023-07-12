@extends('layouts.soporte')
@section('content')
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('curriculum.create')}}" class="btn btn-primary mt-5">CREAR NUEVO CURRICULUM</a>
				<div class="table-responsive mt-5">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>DESCRIPCION DE MANTENIMIENTO</th>
								<th>FECHA DE MANTENIMIENTO</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($curriculum as $curriculum)


								<tr>
									<td>{{$curriculum->id}}</td>
									<td>{{$curriculum->description_of_maintenance}}</td>
									<td>{{$curriculum->maintenance_date}}</td>
									<td>
										<form action="{{route('curriculum.destroy', $curriculum->id)}}" method="post">
                                            @method('DELETE')
											@csrf
											<a href="{{route('curriculum.show', $curriculum->id)}}" class="btn btn-sm btn-info">Detalles</a>
											<a href="{{route('curriculum.edit', $curriculum->id)}}" class="btn btn-sm btn-warning">Editar</a>
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
