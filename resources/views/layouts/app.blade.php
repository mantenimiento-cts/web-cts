<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('style.css')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

   <!-- font icons -->
   <link rel="stylesheet" href="{{url('assets/vendors/themify-icons/css/themify-icons.css')}}">
   <!-- Bootstrap + LeadMark main styles -->
   <link rel="stylesheet" href="{{url('assets/css/leadmark.css')}}">

</head>
<body>
    <div id="app">
        <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
            <div class="container">
                <a class="navbar-brand" href="#">
                <img class="imagen-circular" src="{{url('img/logo.png')}}">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="ml-4 nav-link btn btn-primary btn-sm rounded" href="{{ route('login') }}">Iniciar sesion</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="ml-4 nav-link btn btn-primary btn-sm rounded" href="{{ route('register') }}">Registrarse</a>
                            </li>
                        @endif
                    @else
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end text-white" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- core  -->
    <script src="{{url('assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{url('assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap 3 affix -->
	<script src="{{url('assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

    <!-- Isotope -->
    <script src="{{url('assets/vendors/isotope/isotope.pkgd.js')}}"></script>

    <!-- LeadMark js -->
    <script src="{{url('assets/js/leadmark.js')}}"></script>
        @yield('content')

</body>
</html>
