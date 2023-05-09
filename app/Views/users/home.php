<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sticky Footer Navbar Template · Bootstrap v5.0</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">

    <link href="<?= base_url('font-awesome/4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('personal/mystyle.css') ?>" rel="stylesheet">
    <link href="<?= base_url('extras/sticky-footer-navbar.css') ?>" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100">

    <header>

        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Bolsa laboral RRP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse align-items-center" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">
                                <i class="fa fa-area-chart"></i>
                                Convocatorias
                            </a>
                        </li>
                        <?php
                        if ($rol == 'estudiante' || $rol == 'egresado') {
                            echo '<li class="nav-item">';
                            echo '<a class="nav-link" aria-current="page" href="#">';
                            echo '   <i class="fa fa-id-badge"></i>';
                            echo '    Mis postulaciones';
                            echo '</a>';
                            echo '</li>';
                        } else {
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-id-card-o"></i>
                                Mi perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-key"></i>
                                Cambiar clave
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-warning" type="submit">Cerrar sesión</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Sticky footer with fixed navbar</h1>
            <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code class="small">padding-top: 60px;</code> on the <code class="small">main &gt; .container</code>.</p>
            <div class="row row-cols-2 g-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jefe de Calidad - Movimiento de Tierra</h5>
                            <p class="card-text">Descripción de la empresa SGS es una compañía multinacional de origen suizo, líder mundial en servicios de inspección...
                            <p class="card-text"><small class="text-muted">Fecha publicación: 15/05/2023</small></p>
                            <div class="float-end">
                                <a class="btn btn-outline-success" href="#"><strong>Ver más detalles</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jefe de Calidad - Movimiento de Tierra</h5>
                            <p class="card-text">Descripción de la empresa SGS es una compañía multinacional de origen suizo, líder mundial en servicios de inspección...
                            <p class="card-text"><small class="text-muted">Fecha publicación: 15/05/2023</small></p>
                            <div class="float-end">
                                <a class="btn btn-outline-success" href="#"><strong>Ver más detalles</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jefe de Calidad - Movimiento de Tierra</h5>
                            <p class="card-text">Descripción de la empresa SGS es una compañía multinacional de origen suizo, líder mundial en servicios de inspección...
                            <p class="card-text"><small class="text-muted">Fecha publicación: 15/05/2023</small></p>
                            <div class="float-end">
                                <a class="btn btn-outline-success" href="#"><strong>Ver más detalles</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jefe de Calidad - Movimiento de Tierra</h5>
                            <p class="card-text">Descripción de la empresa SGS es una compañía multinacional de origen suizo, líder mundial en servicios de inspección...
                            <p class="card-text"><small class="text-muted">Fecha publicación: 15/05/2023</small></p>
                            <div class="float-end">
                                <a class="btn btn-outline-success" href="#"><strong>Ver más detalles</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jefe de Calidad - Movimiento de Tierra</h5>
                            <p class="card-text">Descripción de la empresa SGS es una compañía multinacional de origen suizo, líder mundial en servicios de inspección...
                            <p class="card-text"><small class="text-muted">Fecha publicación: 15/05/2023</small></p>
                            <div class="float-end">
                                <a class="btn btn-outline-success" href="#"><strong>Ver más detalles</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jefe de Calidad - Movimiento de Tierra</h5>
                            <p class="card-text">Descripción de la empresa SGS es una compañía multinacional de origen suizo, líder mundial en servicios de inspección...
                            <p class="card-text"><small class="text-muted">Fecha publicación: 15/05/2023</small></p>
                            <div class="float-end">
                                <a class="btn btn-outline-success" href="#"><strong>Ver más detalles</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jefe de Calidad - Movimiento de Tierra</h5>
                            <p class="card-text">Descripción de la empresa SGS es una compañía multinacional de origen suizo, líder mundial en servicios de inspección...
                            <p class="card-text"><small class="text-muted">Fecha publicación: 15/05/2023</small></p>
                            <div class="float-end">
                                <a class="btn btn-outline-success" href="#"><strong>Ver más detalles</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jefe de Calidad - Movimiento de Tierra</h5>
                            <p class="card-text">Descripción de la empresa SGS es una compañía multinacional de origen suizo, líder mundial en servicios de inspección...
                            <p class="card-text"><small class="text-muted">Fecha publicación: 15/05/2023</small></p>
                            <div class="float-end">
                                <a class="btn btn-outline-success" href="#"><strong>Ver más detalles</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <br />
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <div class="text-muted">Copyright &copy; IESTP Ricardo Ramos Plata</div>
        </div>
    </footer>


    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>