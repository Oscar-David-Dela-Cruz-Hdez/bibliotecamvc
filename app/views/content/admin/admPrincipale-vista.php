<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/principale.css">
</head>
<body style="background: url('<?php echo APP_URL; ?>app/views/img/659155.jpg') no-repeat center / cover;">
    <div class="d-flex flex-column min-vh-100">
        <!-- header -->
        <header class="header py-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">Biblioteca Virtual</h1>
                    </div>
                </div>
            </div>
        </header>

        <!-- nav mamalon -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="<?php echo APP_URL; ?>app/views/img/2-1.png" alt="Logo" style="width: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>iniziaSessione/">Inicio Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>documentazione/">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>libri/">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>regolamento/">Reglamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>profilo/">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./img/st,small,507x507-pad,600x600,f8f8f8.jpg">.</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Bloque de cita -->
        <div id="contenedor-cita" class="text-center mt-5 p-4 border rounded bg-light" style="background: url('<?php echo APP_URL; ?>app/views/img/—Pngtree—manuscripts\ style\ vintage\ paper_1405401.png') no-repeat center / cover;">
            <p id="cita" class="tipografia">Cargando cita...</p>
            <p id="autor"></p>
        </div>

        <!-- aqui empieza el contenido -->
        <main class="container mt-5 flex-fill">
            <div class="row">
                <div class="col-md-4">
                    <div class="book-card">
                        <img src="<?php echo APP_URL; ?>app/views/img/Sin_título.jp" alt="Libro 1" class="book-img">
                        <h4 class="mt-3 main-text">Libro 1</h4>
                        <p class="secondary-text">Descripción breve del libro 1.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="book-card">
                        <img src="<?php echo APP_URL; ?>app/views/img/GLJZ4PpW0AAM8z3.jp" alt="Libro 2" class="book-img">
                        <h4 class="mt-3 main-text">Libro 2</h4>
                        <p class="secondary-text">Descripción breve del libro 2.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="book-card">
                        <img src="<?php echo APP_URL; ?>app/views/img/GJ7X1mlaMA0GUJ.jpg" alt="Libro 3" class="book-img">
                        <h4 class="mt-3 main-text">Libro 3</h4>
                        <p class="secondary-text">Descripción breve del libro 3.</p>
                    </div>
                </div>
            </div>
        </main>

        <!-- footer -->
        <footer class="footer mt-auto py-3">
            <div class="container">
                <p class="text-center">&copy; 2024 Biblioteca Virtual. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>

    <script src="<?php echo APP_URL; ?>app/views/js/cita.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
