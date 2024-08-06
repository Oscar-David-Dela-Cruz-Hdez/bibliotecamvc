<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Libro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/documentazione.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="d-flex flex-column min-vh-100" style="background: url('<?php echo APP_URL; ?>app/views/img/659155.jpg') no-repeat center / cover; background-color: #FFFFFF;">
    
    <main class="flex-fill">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h2 class="text-center mb-4">Insertar Libro</h2>
                            <form id="libroForm" method="POST" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="titulo" class="form-label">Título:</label>
                                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el título del libro" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="anio" class="form-label">Fecha de Publicación:</label>
                                        <input type="date" class="form-control" id="anio" name="anio" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="imagen" class="form-label">Imagen de Portada:</label>
                                        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="subcategoria" class="form-label">Subcategoría:</label>
                                        <input type="text" class="form-control" id="subcategoria" name="subcategoria" placeholder="Ingrese la subcategoría" required>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">Agregar Libro</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
=======
        </main>
    </div>
>>>>>>> 84f25c0004bbb716eddc64264a346367af89c549
