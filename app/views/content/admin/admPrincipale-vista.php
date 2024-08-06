<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/principale.css">
</head>
<body style="background: url('<?php echo APP_URL; ?>app/views/img/659155.jpg') no-repeat center / cover;">
    <div class="d-flex flex-column min-vh-100">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Biblioteca Virtual</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Libros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Bloque de cita -->
        <div id="contenedor-cita" class="text-center mt-5 p-4 border rounded bg-light position-relative" style="background: url('<?php echo APP_URL; ?>app/views/img/—Pngtree—manuscripts\ style\ vintage\ paper_1405401.png') no-repeat center / cover;">
            <p id="cita" class="tipografia">Cargando cita...</p>
            <p id="autor"></p>
        </div>

        <!-- Contenido -->
        <main class="container mt-5 flex-fill">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo APP_URL; ?>app/views/img/Sin_título.jpg" alt="Libro 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Libro 1</h5>
                            <p class="card-text">Descripción breve del libro 1.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Reservar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo APP_URL; ?>app/views/img/GLJZ4PpW0AAM8z3.jpg" alt="Libro 2" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Libro 2</h5>
                            <p class="card-text">Descripción breve del libro 2.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Reservar</button>
                                </div>
                                <small class="text-muted">15 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo APP_URL; ?>app/views/img/GJ7X1mlaMA0GUJ.jpg" alt="Libro 3" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Libro 3</h5>
                            <p class="card-text">Descripción breve del libro 3.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Reservar</button>
                                </div>
                                <small class="text-muted">5 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-light py-3 mt-auto">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">© 2024 Biblioteca Virtual</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#" class="text-decoration-none">Política de Privacidad</a>
                        <span class="text-muted mx-2">|</span>
                        <a href="#" class="text-decoration-none">Términos de Servicio</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?php echo APP_URL; ?>app/views/js/cita.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
