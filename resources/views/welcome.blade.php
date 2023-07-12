<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Be Group | Inicio</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <style>
        .bg-image-1 {
            position: relative;
            background-image: url('assets/images/paralaxbus.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .bg-image {
            position: relative;
            background-image: url('assets/images/paralaxservicios.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .bg-image-1::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.4);
            /* Ajusta el valor alpha (0.4) para cambiar la opacidad */
        }

        .bg-image::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.4);
            /* Ajusta el valor alpha (0.4) para cambiar la opacidad */
        }

        .content {
            position: relative;
            padding: 20px;
            color: #fff;
            z-index: 1;
            /* Asegura que el contenido esté por encima de la superposición */
        }

        .overlay {
            font-size: 8px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            text-align: center;
        }

        .custom-img {
            padding: 3px;
            width: 200px;
            border-radius: 25px;

        }

        .step-item {
            position: relative;
            display: inline-block;
            text-align: center;
        }

        .step-item .icon {
            position: relative;
            display: block;
            width: 40px;
            height: 40px;
            margin: 0 auto;
        }

        .step-item .line {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 2px;
            height: 100%;
            background: #000;
            transform: translateX(-50%);
        }

        .step-item h3 {
            margin-top: 10px;
        }

        .step-item:first-child .line {
            display: none;
        }

        .step-item:last-child .line {
            display: none;
        }

        .navbar-highlight {
            background-color: transparent;
            color: #2764AE;
            text-decoration: underline;
        }

        .carousel-item {
            position: relative;
        }

        .carousel-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(132, 162, 202, 0.5);
            padding: 20px;
            color: ##fff;
        }

        .carousel-caption h1 {
            font-size: 3rem;
        }

        .carousel-caption h5 {
            font-size: 1.5rem;
        }

        .container slide-in.slide-in {
            opacity: 0;
            transform: translateX(-100px);
            transition: opacity 0.5s, transform 0.5s;
        }

        .container slide-in.slide-in.show {
            opacity: 1;
            transform: translateX(0);
        }

        .btn-primary {
            background: #2764AE;
            color: #fff;
            border: 2px solid #2764AE;
        }
    </style>
</head>

<body>
    <div style="width:99%">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container slide-in">
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
                        <li class="nav-item navbar-highlight">
                            <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('bi') }}">Business Intelligence</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('formulario') }}">Formulario</a>
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

        <div id="carouselExampleIndicators" class="carousel slide w-80 p-10 m-5 " data-bs-ride="carousel"
            style="padding: 3px">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/carruselinicio.jpg" class="d-block w-100" alt="Imagen 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Crece con nosotros</h1>
                        <h5>Somos expertos en impulsar empresas al éxito.</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/carruselmercurius.jpg" class="d-block w-100" alt="Imagen 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Aplicaciones digitales</h1>
                        <h5>
                            Nuevas herramientas para mejores resultados.
                        </h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/carruselservicios.jpg" class="d-block w-100" alt="Imagen 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Servicios integrales</h1>
                        <h5>Conoce nuestras soluciones inteligentes para tu empresa.</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
        <br><br><br>

        <div class="container slide-in">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/quienessomos.jpg" class="img-fluid" alt="Imagen">
                </div>
                <div class="col-md-6">

                    <div class="about-desc">
                        <h1 class="colorlib-heading">Una historia de Éxito</h1><br>
                        <p>
                        <h1><strong>
                                <font color="#2764AE">BUSINESS <br> ESSENTIALS <br>GROUP</font>
                            </strong></h1>
                        </p>
                        <p>
                        <h2>Una empresa con más de <strong>
                                <font color="#2764AE">10 años</font>
                            </strong><br>de experiencia.</h2>
                        </p>
                        <p>Fundada por un grupo de jóvenes emprendedores, decididos a<br>crear herramientas eficientes
                            para los retos del mercado<br>empresarial mexicano.
                        </p>
                    </div>
                    <div class="row padding">
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps active step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>
                                <h3>Eficiencia</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>
                                <h3>Calidad</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>
                                <h3>Servicio</h3>
                            </a>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <br><br><br>

        <div class="container slide-in">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><br><br><br><br>
                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="row">
                                    <div class="colorlib-icon col-md-1">
                                        <i class='bx bxs-share-alt'></i>
                                    </div>
                                    <div class="colorlib-text col">
                                        <h3>Misión</h3>
                                        <p class="text-justify">Responder con eficiencia a las necesidades de capital
                                            humano
                                            con propuestas inteligentes e innovadoras.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="row">
                                    <div class="colorlib-icon col-md-1">
                                        <i class='bx bxs-share-alt'></i>
                                    </div>
                                    <div class="colorlib-text col">
                                        <h3>Visión</h3>
                                        <p class="text-justify">Ser reconocidos como una firma confiable y eficiente
                                            que
                                            genera
                                            negocios de grandes beneficios para nuestros clientes y grupos de interés.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="row">
                                    <div class="colorlib-icon col-md-1">
                                        <i class='bx bxs-share-alt'></i>
                                    </div>
                                    <div class="colorlib-text col">
                                        <h3>Valores</h3>
                                        <p class="text-justify">Ser reconocidos como una firma confiable y eficiente
                                            que
                                            genera
                                            negocios de grandes beneficios para nuestros clientes y grupos de interés.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="services-wrap animate-box position-relative">
                                <img src="assets/images/enfoquealcliente.jpg" class="img-fluid rounded custom-img"
                                    alt="Enfoque al cliente">
                            </div>
                            <div class="services-wrap animate-box position-relative">
                                <img src="assets/images/calidad.jpg" class="img-fluid rounded custom-img"
                                    alt="Calidad como forma de vida">
                            </div>
                            <div class="services-wrap animate-box position-relative">
                                <img src="assets/images/profesionalismo.jpg" class="img-fluid rounded custom-img"
                                    alt="Profesionalismo">
                            </div>
                        </div>
                        <div class="col-md-6 move-bottom">
                            <div class="services-wrap animate-box position-relative">
                                <img src="assets/images/honestidad.jpg" class="img-fluid rounded custom-img"
                                    alt="Honestidad">
                            </div>
                            <div class="services-wrap animate-box position-relative">
                                <img src="assets/images/servicio.jpg" class="img-fluid rounded custom-img"
                                    alt="Servicio">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>


        <div class="container slide-in">
            <div class="bg-image">
                <div class="content">
                    <h2>Conoce nuestros servicios</h2>
                    <a href="#" class="btn btn-primary">Conoce más</a>
                </div>
            </div>
        </div>

        <br><br><br>

        <div class="container slide-in">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/buscasempleo.jpg" alt="Imagen" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div>
                        <!--span class="heading-meta">Welcome</span-->
                        <h1 class="colorlib-heading">Una nueva visión de los negocios</h1><br>
                        <p>
                        <h1><strong>
                                <font color="#2764AE">INTÉGRATE A <br> NUESTRO <br> EQUIPO 3.0</font>
                            </strong></h1>
                        </p>
                        <p>
                        <h2>Conoce más de nosotros a través de nuestros canales digitales.</h2>
                        </p>
                        <p>Buscamos empresas y personal comprometido con el éxito y la<br>superación de nuevos retos.
                            Sigue
                            las publicaciones de nuestras<br>redes sociales para obtener mayor información sobre
                            nuestros<br>servicios y vacantes.</p>
                    </div>
                    <div class="row padding">
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps active step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>

                                <h3>Compromiso</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>

                                <h3>Éxito</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>

                                <h3>Superación</h3>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <br><br><br>

        <div class="container slide-in">
            <div class="bg-image-1">
                <div class="content">
                    <h2>Conoce nuestras herramientas</h2>
                    <a href="#" class="btn btn-primary">Conoce más</a>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var windowBottom = $(this).scrollTop() + $(this).innerHeight();
                $(".container slide-in").each(function() {
                    var objectBottom = $(this).offset().top + $(this).outerHeight();

                    if (objectBottom < windowBottom) {
                        if (!$(this).hasClass("show")) {
                            $(this).addClass("show");
                        }
                    } else {
                        if ($(this).hasClass("show")) {
                            $(this).removeClass("show");
                        }
                    }
                });
            }).scroll();
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
