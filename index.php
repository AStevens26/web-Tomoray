<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/LOGO-TOMORAYX1.jpg">
    <!--CSS-->
    <link rel="stylesheet" href="CSS/index.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        type="image/x-icon">
    <link rel="shortcut icon" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        type="image/x-icon">
    <title>TOMOMORAY</title>
</head>

<body>


    <!--<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="img/radiologia-video.mp4" type="video/mp4">
        </video>-->

    <div class=" info container-fluid  justify-content-around pt-2" id="inicio">
        <p>
            <?php
                date_default_timezone_set("America/Lima");
                
                echo date("l, d-m-Y  H : i : s A");
            ?>
        </p>
        
        <P>CONTACTENOS +51 987654321</P>
    </div>

    <!-- Navigation-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-ligth shadow-lg p-2 bg-body">
        <div class="container px-5">
            <a class="navbar-brand" href="index.php">
                <img src="img/LOGO-TOMORAYX.jpg" width="120" height="me-auto" alt="Logo" loading="lazy"
                    style="margin-top: -1px;" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php #inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#doctores">Doctores</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Socios</a></li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-outline-warning px-4 me-sm-3 mb-3" href="#">Intranet</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-outline-warning px-4 me-sm-3" href="citas.html">Citas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header id="inicio">
        <div class="header-container px-5">
            <div class="row gx-5 align-items-center justify-content-center position-relative">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-6 fw-bolder text-white mb-2">Tu sonrisa es nuestra prioridad en radiologia
                            dental</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Ofrecemos servicios de diagn??stico y tratamiento,
                            usando tecnologia de vanguardia para obtener im??gines precisas de los dientes y la
                            estructura ??sea de la mandibula y cabeza...</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#beneficios">Comencemos</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="leermas.php">Leer m??s</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-5 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                        src="img/img1.jpg" alt="..." /></div>
            </div>
        </div>

    </header>

    <!-- Icons Grid-->
    <section class=" container py-5 " id="beneficios">

        <div class="contenedor py-5 ">
            <div class="contenedor-card row justify-content-around">
                <div class="cards col-lg-3 row justify-content-around">
                    <div class="face face1">
                        <div class="content">
                            <div class="icon">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                                <h6>
                                    TECNOLOGIA DE PUNTA
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                TECNOLOGIA DE PUNTA
                            </h3>
                            <p>This is where I network and build my professional protfolio.</p>
                        </div>
                    </div>
                </div>
                <div class="cards col-lg-3 row justify-content-around">
                    <div class="face face1">
                        <div class="content">
                            <div class="icon">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                                <h6>
                                    DIAGNOSTICO PRECISO
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                DIAGNOSTICO PRECISO
                            </h3>
                            <p>This is where I read news and network with different social groups.</p>
                        </div>
                    </div>
                </div>
                <div class="cards col-lg-3 row justify-content-around">
                    <div class="face face1">
                        <div class="content">
                            <div class="icon">
                                <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                <h6>
                                    TRATAMIENTO PERSONALIZADO
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                TRATAMIENTO PERSONALIZADO
                            </h3>
                            <p>This is where I share code and work on projects.</p>
                        </div>
                    </div>
                </div>
                <div class="cards col-lg-3 row justify-content-around">
                    <div class="face face1">
                        <div class="content">
                            <div class="icon">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <h6>
                                    DIAGNOSTICO TEMPRANO
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                DIAGNOSTICO TEMPRANO
                            </h3>
                            <p>This is where I share code and work on projects.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>