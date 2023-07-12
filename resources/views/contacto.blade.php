<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Be Group | Contacto</title>
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
                <h2 class="colorlib-heading">Contactanos</h2>
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
                        <li class="nav-item navbar-highlight">
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
        <section>
            <div class="container">
                <h2 class="text-center">Contáctanos</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class='bx bxs-envelope'></i>
                        </div>
                        <p class="text-center">recepcion@begroup.com.mx</p>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class='bx bx-map-alt'></i>
                        </div>
                        <p class="text-center">Cuautitlán Izcalli, Estado de México.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class='bx bxs-phone-call'></i>
                        </div>
                        <p class="text-center">+52 58 68 45 08</p>
                    </div>
                </div>
            </div>
        </section>


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        <!---------- CONTAINER CONTAINER ----------------->
        <div class="content-container">
            <!-----FORM ------->
            <div class="form-container">
                <form action="/action_page.php">
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">Nombre</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="fname" placeholder="Nombre(s)..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Apellido</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="lname" placeholder="Apellido..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="mail">E-mail</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="mail" name="mail" placeholder="E-mail..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="subject">Contenido</label>
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="Escribe tu mensaje.." style="height:100px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
            <!------------- END FORM ----------------->

            <!------------- END CONTENT-CONTAINER ----------------------->
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
