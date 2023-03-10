<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/LOGO-TOMORAYX1.jpg">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/index.css">
        <title>TOMOMORAY</title>
    </head>
    <body>
        <div class=" info container-fluid  justify-content-around pt-2">
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
                <a class="navbar-brand" href="index.html">
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
        

        
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>