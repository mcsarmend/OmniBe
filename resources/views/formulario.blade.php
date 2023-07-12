<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Be Group | Formulario</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">

</head>
<style>
    .btn-primary {
        background: #2764AE;
        color: #fff;
        border: 2px solid #2764AE;
    }

    .navbar-highlight {
        background-color: transparent;
        color: #2764AE;
        text-decoration: underline;
    }

    * {
        box-sizing: border-box;
        font-family: 'Comfortaa', cursive;
    }

    /************ BEGIN CONTENT CONTAINER  ***************/
    .content-container {
        margin: 0 auto;
        padding-left: 25%;
        padding-right: 25%;
        padding-top: 5%;
        max-height: 100%;

    }




    /************ BEGIN FORM  ***************/
    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        margin-top: 10px;
        background-color: #2764AE;
        color: white;
        font-weight: bold;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: #1f1f1f;
    }

    .form-container {
        border-radius: 10px;
        background-color: #f2f2f2;
        padding: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

        .col-25,
        .col-75,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }

        input[type=submit] {
            margin-top: 10px;
        }
    }



    /************** END FORM ***************/
</style>

<body>
    <br>
    <div style="width: 99%">

        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <h2 class="colorlib-heading">Formulario</h2>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('bi') }}">Business Intelligence</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                        </li>
                        <li class="nav-item navbar-highlight">
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
        <section>
            <div class="container">
                <h2 class="text-center">Formulario</h2>

            </div>
        </section>


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        <!---------- CONTAINER CONTAINER ----------------->
        <div class="content-container">
            <!-----FORM ------->
            <div class="form-container">
                <form id="formulario_prealta">
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">Nombre</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="name" placeholder="Nombre(s).." required>
                        </div>
                        <div class="col-25">
                            <label for="lname">Apellido paterno</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="lname" placeholder="Apellido paterno.." required>
                        </div>

                        <div class="col-25">
                            <label for="sname">Apellido materno</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="sname" name="sname" placeholder="Apellido materno.."required>
                        </div>

                        <div class="col-25">
                            <label for="email">Correo electrónico :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="email" name="email" placeholder="Correo electrónico.."required>
                        </div>

                        <div class="col-25">
                            <label for="curp">CURP :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="curp" name="curp" placeholder="CURP.."required>
                        </div>

                        <div class="col-25">
                            <label for="rfc">RFC :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="rfc" name="rfc" placeholder="RFC.."required>
                        </div>

                        <div class="col-25">
                            <label for="street">Calle :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="street" name="street" placeholder="Calle.."required>
                        </div>


                        <div class="col-25">
                            <label for="streetnum">Número :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="streetnum" name="streetnum" class="form-control"
                                placeholder="Numero...">
                        </div>
                        <div class="col-25">
                            <label for="apple">Manzana :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="apple" name="apple" class="form-control"
                                placeholder="Manzana...">
                        </div>
                        <div class="col-25">
                            <label for="col">Colonia :</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="col" name="col" class="form-control"
                                placeholder="Colonia..." required>
                        </div>
                        <div class="col-25">
                            <label for="town">Municipio:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="town" name="town" class="form-control"
                                placeholder="Municipio..." required>
                        </div>
                        <div class="col-25">
                            <label for="state">Estado:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="state" name="state" class="form-control"
                                placeholder="Estado..."required>
                        </div>
                        <div class="col-25">
                            <label for="application_date">Fecha de Solicitud:</label>
                        </div>
                        <div class="col-75">
                            <input type="date" id="application_date" name="application_date" class="form-control"
                                readonly>
                        </div>
                        <div class="col-25">
                            <label for="recrutier">Reclutador:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="recrutier" name="recrutier" class="form-control"
                                placeholder="Reclutador..." required>
                        </div>



                        <div class="row">
                            <input type="submit" value="Enviar">
                        </div>
                </form>
            </div>
            <!------------- END FORM ----------------->

            <!------------- END CONTENT-CONTAINER ----------------------->
        </div>

        <br><b><br>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function() {
            var currentDate = new Date().toISOString().split('T')[0];
            $('#application_date').val(currentDate);




        });



        $('#formulario_prealta').submit(function(event) {
            event.preventDefault(); // Evita el envío del formulario por defecto

            var formData = $(this).serialize(); // Serializa los datos del formulario

            warningMessage =
                '<p>En cumplimiento de la normativa vigente de protección de datos personales, te informamos que los datos personales proporcionados en este formulario serán tratados de manera confidencial y utilizados únicamente con el propósito de<strong>[indicar el propósito, como responder a tu consulta, procesar tu solicitud, etc.]</strong>.</p><p>Tus datos no serán compartidos con terceros sin tu consentimiento previo, excepto cuando sea requerido por ley o por autoridades competentes.</p><p>Tienes derecho a acceder, rectificar, cancelar u oponerte al tratamiento de tus datos personales. Si deseas ejercer alguno de estos derechos o tienes alguna pregunta sobre cómo se tratan tus datos, puedes ponerte en contacto con nosotros a través de<strong>[indicar los medios de contacto, como correo electrónico, teléfono, etc.]</strong>.</p><p>Al enviar este formulario, aceptas que tus datos personales sean procesados de acuerdo con esta política de privacidad.</p>';
            Swal.fire({
                title: '¡Se enviarán los datos del formulario!',
                html: warningMessage,
                showDenyButton: true,
                confirmButtonText: 'Enviar',
                denyButtonText: `No enviar`,

            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: "enviar_datos",
                        method: "POST",
                        dataType: "JSON",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST', // Utiliza el método HTTP POST
                        data: formData, // Envía los datos del formulario
                        success: function(response) {
                            Swal.fire(
                                '¡Gracias por esperar!',
                                response["success"],
                                'success'
                            )
                            $('#formulario_prealta').trigger('reset');
                            var currentDate = new Date().toISOString().split('T')[0];
                            $('#application_date').val(currentDate);

                        },
                        error: function(error) {
                            // Se ejecuta cuando hay un error en la solicitud
                            console.log('Error en la solicitud');
                            console.log(error);
                        }
                    });


                } else if (result.isDenied) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Encontramos un error...',
                        text: data["responseJSON"]["error"],
                    });
                }
            })
        });
    </script>
</body>

</html>
