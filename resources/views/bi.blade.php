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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                        </li>
                        <li class="nav-item navbar-highlight">
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

        <div class="container">
            <div class="bg-image-1">
                <div class="content">
                    <h2 class>BUSINESS INTELLIGENCE</h2>
                    <br>
                </div>
            </div>
        </div>

        <br><br><br>


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/mercurius.jpg" class="img-fluid" alt="Imagen">
                </div>
                <div class="col-md-6">

                    <div class="about-desc">
                        <h1 class="colorlib-heading">MERCURIUS</h1><br>
                        <p>
                        <h1><strong>
                                <font color="#2764AE">SISTEMA <br> INTEGRAL <br>DE MONITOREO</font>
                            </strong></h1>
                        </p>
                        <p>
                        <p>
                        <h3>Un software integral para la implementación<br>del monitoreo digital de transporte.</h3>
                        </p>
                        <p>Una herramienta pensada en la automatización de las tareas del rastreo de envío de
                            mercancías, mejora la logística de cualquier operación sin importar el tamaño de la misma.
                        </p>

                    </div>
                    <div class="row padding">
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps active step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>
                                <div class="line"></div>
                                <h3>Logística</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>
                                <div class="line"></div>
                                <h3>Seguridad</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>
                                <div class="line"></div>
                                <h3>Tracking</h3>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <div class="about-desc">
                        <h1 class="colorlib-heading">CONTACT CENTER</h1><br>
                        <p>
                        <h1><strong>
                                <font color="#2764AE">BE GROUP <br> CONTACT <br>CENTER</font>
                            </strong></h1>
                        </p>
                        <p>
                        <h3>Una solución integral para la administración y ejecución de servicios telefónicos. </h3>
                        </p>
                        <p>Con cobertura en toda la república mexicana y productos especializados en<br>llamadas de
                            entrada, llamadas de salida y mensajes masivos.</p>
                    </div>
                    <div class="row padding">
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps active step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>
                                <div class="line"></div>
                                <h3>SMS</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>
                                <div class="line"></div>
                                <h3>CORREOS</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>
                                <div class="line"></div>
                                <h3>GRABACIONES</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/contact.jpg" class="img-fluid" alt="Imagen">
                </div>
            </div>
        </div>

        <br><br><br>


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/ecommerce.jpg" class="img-fluid" alt="Imagen">
                </div>
                <div class="col-md-6">

                    <div class="about-desc">
                        <h1 class="colorlib-heading">E-COMMERCE DE BUSSINES ESSENTIAL GROUP</h1><br>
                        <p>
                        <h1><strong>
                                <font color="#2764AE">VENDER <br> DE FORMA <br>SENCILLA</font>
                            </strong></h1>
                        </p>

                        <p>
                        <h3>Un servicio que se encarga de dar soporte <br> a las necesidades de venta por internet</h3>
                        </p>
                        <p>Desde la creación de contenido hasta la administración y creación de<br>un sitio web que
                            logre posicionar productos o servicios.</p>
                    </div>
                    <div class="row padding">
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps active step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>
                                <div class="line"></div>
                                <h3>Diseño</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>
                                <div class="line"></div>
                                <h3>Difusión</h3>
                            </a>
                        </div>
                        <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                            <a class="steps step-item">
                                <p class="icon"><span><i class='bx bx-check-circle'></i></span></p>
                                <div class="line"></div>
                                <h3>Adaptabilidad</h3>
                            </a>
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
                            <a href="{{ route('contacto') }}"class="btn btn-primary btn-learn">Contáctanos</a>
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
        .bg-image-1 {
            position: relative;
            background-image: url('assets/images/paralaxbus.jpg');
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
            background-color: rgba(0, 0, 0, 0.1);
            /* Ajusta el valor alpha (0.4) para cambiar la opacidad */
        }

        .content {
            position: relative;
            padding: 20px;
            color: #fff;
            z-index: 1;
            /* Asegura que el contenido esté por encima de la superposición */
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
