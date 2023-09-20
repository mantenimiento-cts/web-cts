<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>COLOMBIA TECHNICAL SUPPORT</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{url('assets/vendors/themify-icons/css/themify-icons.css')}}">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="{{url('assets/css/leadmark.css')}}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{url('img/logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#service">SERVICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">SOBRE NOSOSTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACTO</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="ml-4 nav-link btn btn-primary btn-sm rounded">INICIAR SESION</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('register')}}" class="ml-4 nav-link btn btn-primary btn-sm rounded">REGISTRARSE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">COLOMBIA TECHNICAL SUPPORT</h1>
            <h1 class="title">sistema de tickets</h1>
        </div>
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->

    <!-- Service Section -->
    <section  id="service" class="section pt-0">
        <div class="container">
            <h6 class="section-title text-center">Nuestros Servicios</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5 class="card-title mt-3">Requerimientos<h5>
                            <p class="mb-0">Agilizar procesos de requerimientos solicitados por clientes</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 class="card-title mt-3">Tickets<h5>
                            <p class="mb-0">Generacion de tickets</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 class="card-title mt-3">Agendamiento<h5>
                            <p class="mb-0">Agendamientos de tecnicos para solucionar tu requerimiento</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6 class="section-title mb-0">Sobre Nosotros</h6>
                    <p >El sistema se plantio con el fin de mostrarle a las empresas un sistema de informacion de tickets que les permita agilizar los procesos de consultas de requerimientos</p>
                    <img src="assets/imgs/about.jpg" alt="" class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row">
                        <div class="col-6">
                            <img src="assets/imgs/about-1.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="assets/imgs/about-2.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-12 mt-4">
                            <p>1. AGILIZAR tickets automaticamente en base a los requerimientos solicitados</p>
                            <p><b>2. CONSULTAR el estado de cada uno de los requerimientos solicitados</b><br>
                            </p>
                            <p>4. LLEVAR seguimiento de los requerimientos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End OF About Section -->



    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Telefono</h6>
                    <p class="mb-4">46545222</p>

                    <h6 class="mb-0">Correo</h6>
                    <p class="mb-4">colombia@cts.com</p>
                </div>
                <div class="col-md-7">
                    <form>
                        <h4 class="mb-4">Dejanos tus datos</h4>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="Nombre">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="email" class="form-control text-white rounded-0 bg-transparent" name="Email" placeholder="Correo">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="Mensaje"></textarea>

                            </div>
                            <div class="form-group col-12 mb-0">
                                <button type="submit" class="btn btn-primary rounded w-md mt-3">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	<!-- core  -->
    <script src="{{url('assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{url('assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap 3 affix -->
	<script src="{{url('assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

    <!-- Isotope -->
    <script src="{{url('assets/vendors/isotope/isotope.pkgd.js')}}"></script>

    <!-- LeadMark js -->
    <script src="{{url('assets/js/leadmark.js')}}"></script>

</body>
</html>
