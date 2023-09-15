
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('css/estilo.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg naveg-bar">
		<a class="navbar-brand" href=""><img class="imagen-circular" src=""></a>
          <div class="ml-auto">
            <a href="{{route('users.index')}}" class="btn btn-link">USUARIOS</a>
            <a href="{{route('clients.index')}}" class="btn btn-link">CLIENTES</a>
            <a href="{{route('equipments.index')}}" class="btn btn-link">EQUIPOS</a>
            <a href="{{route('requeriments.index')}}" class="btn btn-link">REQUERIMIENTOS</a>
            <a href="{{route('curriculums.index')}}" class="btn btn-link">CURRICULUM</a>
            <a href="{{route('tickets.index')}}" class="btn btn-link">TICKETS</a>
            <a href="{{route('status.index')}}" class="btn btn-link">ESTADOS</a>
        </div>
		<div class="ml-auto">
			<button class="btn btn-outline-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ver perfil</button>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="#">Mi perfil</a>
				<a class="dropdown-item" href="#">Cambiar contraseña</a>
				<li><a onclick="document.getElementById('form-logout').submit()">Cerrar sesión</a></li>
				<form id="form-logout" action="{{route('logout')}}" method="POST">
                @csrf
				</form>
			</div>
		</div>
	</nav>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    @yield('content')
</body>
</html>
