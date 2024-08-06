<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/principale.css">
</head>
<body class="d-flex flex-column min-vh-100" style="background: url('<?php echo APP_URL; ?>app/views/img/659155.jpg') no-repeat center / cover;">
    
    <!-- Bloque de cita -->
    <div id="contenedor-cita" class="text-center mt-5 p-4 border rounded bg-light" style="background: url('<?php echo APP_URL; ?>app/views/img/—Pngtree—manuscripts\ style\ vintage\ paper_1405401.png') no-repeat center / cover;">
        <p id="cita" class="tipografia">Cargando cita...</p>
        <p id="autor"></p>
    </div>

    <!-- aqui empieza el contenido -->
    <main class="container mt-5 flex-fill">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card book-card h-100">
                    <img src="<?php echo APP_URL; ?>app/views/img/libro1.jpg" alt="Libro 1" class="card-img-top book-img">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title mt-3 main-text">Libro 1</h4>
                        <p class="card-text secondary-text">Descripción breve del libro 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card book-card h-100">
                    <img src="<?php echo APP_URL; ?>app/views/img/libro2.jpg" alt="Libro 2" class="card-img-top book-img">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title mt-3 main-text">Libro 2</h4>
                        <p class="card-text secondary-text">Descripción breve del libro 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card book-card h-100">
                    <img src="<?php echo APP_URL; ?>app/views/img/libro3.jpg" alt="Libro 3" class="card-img-top book-img">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title mt-3 main-text">Libro 3</h4>
                        <p class="card-text secondary-text">Descripción breve del libro 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="<?php echo APP_URL; ?>app/views/js/cita.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
