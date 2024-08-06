<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/adminprincipal.css">
</head>
<body style="background: url('<?php echo APP_URL; ?>app/views/img/659155.jpg') no-repeat center / cover;">
    <div class="d-flex flex-column min-vh-100">
      
        <!-- Bloque de cita -->
        <div id="contenedor-cita" class="text-center mt-5 p-4 border rounded bg-light" style="background: url('<?php echo APP_URL; ?>app/views/img/—Pngtree—manuscripts\ style\ vintage\ paper_1405401.png') no-repeat center / cover;">
            <p id="cita" class="tipografia">Cargando cita...</p>
            <p id="autor"></p>
        </div>

        <!-- aquí empieza el contenido -->
        <main class="container mt-5 flex-fill">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo APP_URL; ?>app/views/img/Sin_título.jp" alt="Libro 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Libro 1</h5>
                            <p class="card-text">Descripción breve del libro 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo APP_URL; ?>app/views/img/GLJZ4PpW0AAM8z3.jp" alt="Libro 2" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Libro 2</h5>
                            <p class="card-text">Descripción breve del libro 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo APP_URL; ?>app/views/img/GJ7X1mlaMA0GUJ.jpg" alt="Libro 3" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Libro 3</h5>
                            <p class="card-text">Descripción breve del libro 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    <script src="<?php echo APP_URL; ?>app/views/js/cita.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
