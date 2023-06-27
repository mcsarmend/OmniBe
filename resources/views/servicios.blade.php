<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<style>
    .navbar-highlight {
        background-color: transparent;
        color: #2764AE;
        text-decoration: underline;
    }

    .btn-primary {
        background: #2764AE;
        color: #fff;
        border: 2px solid #2764AE;
    }
</style>

<body>
    <br>
    <div style="width: 99%">

        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <!--span class="heading-meta">Blog</span-->
                <h2 class="colorlib-heading">Servicios</h2>
            </div>
        </div>
        <br>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo3.png" class="d-block navbar-brand-image" style="width:55px"
                        alt="Imagen 1">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item navbar-highlight">
                            <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('bi') }}">Business Intelligence</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://begb.com.mx/" target="_blank"
                                rel="noopener noreferrer">Nom 035</a>
                        </li>
                    </ul>
                </div>
                @guest
                    <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                @endguest
            </div>
        </nav>


        <div class="container" id="colorlib-main">

            <div class="colorlib-blog">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                            data-animate-effect="fadeInLeft">
                            <!--span class="heading-meta">Blog</span-->
                            <h2 class="colorlib-heading">Servicios</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a class="blog-img"><img src="assets/images/head.jpg" class="img-responsive"
                                        alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <h3 class="text-center">
                                        <font color="#2764AE"><strong>Headhunting</strong></font>
                                    </h3>
                                    <p class="text-justify">Nuestra división de Headhunting se encarga de crear e
                                        implementar estrategias en las técnicas para localizar, evaluar y contratar
                                        personal
                                        altamente calificado para puestos estratégicos dentro de su empresa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a class="blog-img"><img src="assets/images/staffing.jpg" class="img-responsive"
                                        alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <h3 class="text-center">
                                        <font color="#2764AE"><strong>Staffing Solutions</strong></font>
                                    </h3>
                                    <p class="text-justify">La división de Staffing de BE Group es un servicio de
                                        suministro
                                        de recursos humanos pensado de una manera 100% eventual.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a class="blog-img"><img src="assets/images/nomina.jpg" class="img-responsive"
                                        alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <h3 class="text-center">
                                        <font color="#2764AE"><strong>Maquila de Nómina</strong></font>
                                    </h3>
                                    <p class="text-justify">Nuestro servicio de maquila de nómina cubre la necesidad en
                                        el
                                        procesamiento de nóminas, con total apego legal, laboral y fiscal; toda vez que
                                        contamos con especialistas en dichas áreas.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a class="blog-img"><img src="assets/images/clean.jpg" class="img-responsive"
                                        alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <h3 class="text-center">
                                        <font color="#2764AE"><strong>BE Group Clean Solutions</strong></font>
                                    </h3>
                                    <p class="text-justify">BE Group Clean Solutions es una división especializada en
                                        la
                                        ejecución de servicios de limpieza. Servicios en sitio, limpieza profunda,
                                        limpieza
                                        en eventos, siempre utilizando planes a la medida de su negocio.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a class="blog-img"><img src="assets/images/comunication.jpg" class="img-responsive"
                                        alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <h3 class="text-center">
                                        <font color="#2764AE"><strong>Communication Solutions </strong></font>
                                    </h3>
                                    <p class="text-justify">Communication Solutions está pensando en la creación de
                                        contenido para plataformas digitales e impresas. Nosotros trabajamos para
                                        asegurar
                                        el correcto significado del mensaje que transmites a tus empleados y al mundo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a class="blog-img"><img src="assets/images/promotora.jpg" class="img-responsive"
                                        alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <h3 class="text-center">
                                        <font color="#2764AE"><strong>Promotoría y demostradora</strong></font>
                                    </h3>
                                    <p class="text-justify">Nuestro servicio de Promotoría se encuentra enfocado en
                                        crear
                                        estrategias que ayuden a dar impulso a las ventas, imagen y marca de nuestros
                                        clientes, a través de planes promocionales en el punto de venta.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>

        <div id="get-in-touch" class="colorlib-bg-color text-center">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <h2>Estamos interesados en tus comentarios.</h2>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <p class="colorlib-lead">Si tienes alguna duda o deseas información de alguno de nuestros
                            servicios
                            o divisiones.</p>
                        <p style="text-align: center;">
                            <a href="{{ route('contacto') }}" class="btn btn-primary btn-learn">Contáctanos</a>
                        </p>
                        <p style="text-align: center;">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/BeGroupOficial/">
                                    <i class='bx bxl-facebook-square'></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/BeGroupOficial">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/begroupoficial/">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/company/begroup">
                                    <i class='bx bxl-linkedin-square'></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/channel/UCQLWsrFVzTGPSxWh0oktOUQ">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                        </p>
                        <p><small>COPYRIGHT © 2019. TODOS LOS DERECHOS RESERVADOS | BEGROUP.</small></p>
                        <p>
                        <h6>Todas las marcas de terceros que aparezcan en nuestro sitio, son propiedad de sus
                            respectivos
                            titulares.</h6>
                        </p>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>

    </div>



    <style>
        .img-responsive {
            padding: 3px;
            width: 400px;
            border-radius: 25px;

        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
