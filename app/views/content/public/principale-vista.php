<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/principale.css">
</head>
<body>
  

      

        <!-- Bloque de cita -->
        <div id="contenedor-cita" class="text-center mt-5 p-4 border rounded bg-light" style="background: url('<?php echo APP_URL; ?>app/views/img/—Pngtree—manuscripts\ style\ vintage\ paper_1405401.png') no-repeat center / cover;">
            <p id="cita" class="tipografia">Cargando cita...</p>
            <p id="autor"></p>
        </div>

        <!-- aqui empieza el contenido -->
        <main class="container mt-5 flex-fill">
            <div class="row">
                <div class="col-md-4 container">
                    <div class="book-card card-body border-dark">
                        <img src="<?php echo APP_URL; ?>app/views/img/libro1.jpg" alt="Libro 1" class="book-img figure-img img-fluid img-thumbnail border-dark">
                        <h4 class="mt-3 main-text">Libro 1</h4>
                        <p class="secondary-text card-text">Descripción breve del libro 1.</p>
                    </div>
                </div>
                <div class="col-md-4 container">
                    <div class="book-card">
                        <img src="<?php echo APP_URL; ?>app/views/img/libro2.jpg" alt="Libro 2" class="book-img figure-img img-fluid img-thumbnail border-dark">
                        <h4 class="mt-3 main-text">Libro 2</h4>
                        <p class="secondary-text">Descripción breve del libro 2.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="book-card">
                        <img src="<?php echo APP_URL; ?>app/views/img/libro3.jpg" alt="Libro 3" class="book-img img-fluid img-thumbnail border-dark">
                        <h4 class="mt-3 main-text">Libro 3</h4>
                        <p class="secondary-text">Descripción breve del libro 3.</p>
                    </div>
                </div>
            </div>
        </main>
        <hr>
      
    </div>

    <script src="<?php echo APP_URL; ?>app/views/js/cita.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
