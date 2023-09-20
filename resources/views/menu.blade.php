<!DOCTYPE html>
<html lang="es">
<style>
    .navbar-brand img:hover {
        transform: rotate(0deg) scale(1.1);
        transition: all 0.3s ease-in-out;
    }

    .nav-link:hover h6 {
        transform: rotate(0deg) scale(1.04);
        transition: all 3s ease-in-out;
    }
</style>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="/fontawesome/css/all.css" />
    <script src="/bootstrap/js/bootstrap.js"></script>

    <title>@yield("titulo", "COLEGIO SAN LUIS")</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/img/escudo.png" alt="escudo" width="65" height="60" class="navbar-brand">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" style="{{ ResaltarRuta('estudiantes') }}" href="{{ route('estudiantes') }}">
                            <h6 class="estudiantes">ESTUDIANTES</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="{{ ResaltarRuta('profesores') }}" href="{{ route('profesores') }}">
                            <h6>PROFESORES</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="{{ ResaltarRuta('asignaturas') }}" href="{{ route('asignaturas') }}">
                            <h6>ASIGNATURAS</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="{{ ResaltarRuta('horarios') }}" href="{{ route('horarios') }}">
                            <h6>HORARIOS</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="{{ ResaltarRuta('notas') }}" href="{{ route('notas') }}">
                            <h6>NOTAS</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield("contenido")
</body>

</html>