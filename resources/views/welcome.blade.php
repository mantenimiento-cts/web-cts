<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"><span class="text-primary">Colombia</span>CTS </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link">Acceder</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('register')}}" class="nav-link">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="carousel slide" id="carouselE" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1">
            </button>

            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="1" aria-current="true"
                aria-label="Slide 2">
            </button>

            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="2" aria-current="true"
                aria-label="Slide 3">
            </button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('img/img1.png')}}" alt="" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>Mantenimiento de equipos de computo</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ullam doloremque impedit dicta eius
                        perspiciatis repudiandae, ex possimus nemo aliquam quaerat laboriosam obcaecati illum, et
                        tempore nam iusto! Optio, quis.</p>
                        <a href="" class="btn btn-primary mt-3">Mas informacion</a>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{url('img/img1.png')}}" alt="" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>Mantenimiento de equipos de computo</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ullam doloremque impedit dicta eius
                        perspiciatis repudiandae, ex possimus nemo aliquam quaerat laboriosam obcaecati illum, et
                        tempore nam iusto! Optio, quis.</p>
                        <a href="" class="btn btn-primary mt-3">Mas informacion</a>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{url('img/img1.png')}}" alt="" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>Mantenimiento de equipos de computo</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ullam doloremque impedit dicta eius
                        perspiciatis repudiandae, ex possimus nemo aliquam quaerat laboriosam obcaecati illum, et
                        tempore nam iusto! Optio, quis.</p>
                        <a href="" class="btn btn-primary mt-3">Mas informacion</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button"
        data-bs-target="#carouselE"
        data-bs-silde="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Pewvious</span></button>

    <button class="carousel-control-next" type="button"
    data-bs-target="#carouselE"
    data-bs-silde="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span></button>
    </div>

    <section class="abot section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text text white">
                        <h2>acerca de nosotros</h2>
                        <p>Lorem</p>
                        <a href="" class="btn btn-primary">Mas informacion</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center text-white pb-5">
                        <h2>Nuestros Servicios</h2>
                        <p>Korem</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-laptop">
                                <h3 class="card-title">Registro</h3>
                                <p class="lead">Lorem</p>
                                <button class="btn btn-priamry">Mas informacion</button>
                            </i>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-wifi">
                                <h3 class="card-title">Internet</h3>
                                <p class="lead">Lorem</p>
                                <button class="btn btn-priamry">Mas informacion</button>
                            </i>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-tv">
                                <h3 class="card-title">tv</h3>
                                <p class="lead">Lorem</p>
                                <button class="btn btn-priamry">Mas informacion</button>
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portafolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center text-white pb-5">
                        <h2>Portafolio</h2>
                        <p>Lorem</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-dark pb-2">
                        <div class="card-body text-white">
                            <div class="img-area mb-4">
                                <img src="" alt="" class="img-fluid">
                            </div>
                            <h3>mantenimiento</h3>
                            <p class="lead">lore</p>
                            <button class="btn bg-primary text-white">Mas informacion</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-dark pb-2">
                        <div class="card-body text-white">
                            <div class="img-area mb-4">
                                <img src="" alt="" class="img-fluid">
                            </div>
                            <h3>mantenimiento 2</h3>
                            <p class="lead">lore</p>
                            <button class="btn bg-primary text-white">Mas informacion</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-dark pb-2">
                        <div class="card-body text-white">
                            <div class="img-area mb-4">
                                <img src="" alt="" class="img-fluid">
                            </div>
                            <h3>mantenimiento 3</h3>
                            <p class="lead">lore</p>
                            <button class="btn bg-primary text-white">Mas informacion</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center text-white pb-5">
                        <h2>Acessorios</h2>
                        <p>Lorem</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center bg-dark">
                        <div class="card-body text-white">
                            <img src="" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Lorem</h3>
                            <p class="card-text">
                                loew
                            </p>
                            <p class="socials">
                                <i class="bi bi-twitter text-white mx-1"></i>
                                <i class="bi bi-facebook text-white mx-1"></i>
                                <i class="bi bi-linkedin text-white mx-1"></i>
                                <i class="bi bi-instagram text-white mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center bg-dark">
                        <div class="card-body text-white">
                            <img src="" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Lorem</h3>
                            <p class="card-text">
                                loew
                            </p>
                            <p class="socials">
                                <i class="bi bi-twitter text-white mx-1"></i>
                                <i class="bi bi-facebook text-white mx-1"></i>
                                <i class="bi bi-linkedin text-white mx-1"></i>
                                <i class="bi bi-instagram text-white mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center bg-dark">
                        <div class="card-body text-white">
                            <img src="" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Lorem</h3>
                            <p class="card-text">
                                loew
                            </p>
                            <p class="socials">
                                <i class="bi bi-twitter text-white mx-1"></i>
                                <i class="bi bi-facebook text-white mx-1"></i>
                                <i class="bi bi-linkedin text-white mx-1"></i>
                                <i class="bi bi-instagram text-white mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center bg-dark">
                        <div class="card-body text-white">
                            <img src="" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Lorem</h3>
                            <p class="card-text">
                                loew
                            </p>
                            <p class="socials">
                                <i class="bi bi-twitter text-white mx-1"></i>
                                <i class="bi bi-facebook text-white mx-1"></i>
                                <i class="bi bi-linkedin text-white mx-1"></i>
                                <i class="bi bi-instagram text-white mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center text-white pb-5">
                        <h2>Contacto</h2>
                        <p>
                            lorem
                        </p>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-12 p-0 pt-4 pb-4">
                    <form action="" class="bg-dark p-4 m-auto">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block mt-3">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">P</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>