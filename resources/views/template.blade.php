<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Control AF</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- ICON/PNG -->
    <link rel="shortcut icon" href="img/control-af.png" type="image/png">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">


</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="{{ route('home')}}">
                <img src="img/control-af.png" width="30" height="30" class="d-inline-block align-top" alt="control-af">
                Control AF
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home')}}"><i class="bi bi-house-door"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('xplorer')}}"><i class="bi bi-compass"></i> Explorar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('conexion')}}"><i class="bi bi-broadcast-pin"></i> Conectar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        @yield('content')
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Control Aforo | Seguridad e Información</span>
        </div>
    </footer>


    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</html>