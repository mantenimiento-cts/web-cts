@extends('layouts.app')
@section('content')
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black mt-5">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <img src="{{url('img/user.PNG')}}"
                                    style="width: 185px;" alt="logo">
                                </div>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                    <div class="form-outline mb-4">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input id="name" type="text" class="form-control" name="name" required>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="email" class="form-label">Correo</label>
                                        <input id="email" type="email" class="form-control" name="email" required>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                    <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">Registarse</button>
                                    <a class="text-muted" href="#!">Olvido la contraseña?</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <a class="mb-0 me-2">Ya tiene cuenta?</a>
                                    <a href="{{route('login')}}" type="button" class="btn btn-outline-danger">Iniciar sesion</a>
                                </div>
                        </div>

                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-black px-3 py-4 p-md-5 mx-md-4">
                              <h4 class="mb-4">Colombia Tecnical Support</h4>
                              <p class="small mb-0">Sistema de Tickets</p>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
</section>
@endsection
