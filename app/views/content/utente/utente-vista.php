<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual - Libros</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/libri.css">
</head>
<body>
    <div class="d-flex flex-column min-vh-100">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <form class="d-flex">
                        <input class="form-control me-2 flex-grow-1" type="search" placeholder="Buscar libros" aria-label="Buscar">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- contenido -->
        <main class="container mt-4 flex-fill">
            <div class="row">
                <!-- FILTROS -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Filtros</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="filter-author" class="form-label">Ordenar por Autor</label>
                                    <select class="form-select" id="filter-author">
                                        <option value="A-Z">A - Z</option>
                                        <option value="Z-A">Z - A</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="filter-category" class="form-label">Categoría</label>
                                    <select class="form-select" id="filter-category">
                                        <option>Ficción</option>
                                        <option>No Ficción</option>
                                        <option>Biografía</option>
                                        <option>Infantil</option>
                                        <option>Misterio</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="filter-year" class="form-label">Año de Publicación</label>
                                    <select class="form-select" id="filter-year">
                                        <option>Más recientes primero</option>
                                        <option>Más antiguos primero</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Aplicar Filtros</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- grid de libros -->
                <div class="col-md-9">
                    <div class="row">
                        <!-- Ejemplo de un libro -->
                        <div class="col-md-3 mb-4">
                            <div class="card book-card">
                                <img src="<?php echo APP_URL; ?>app/views/img/2-1.png" class="card-img-top" alt="Título del libro">
                                <div class="card-body">
                                    <h5 class="card-title">Título del Libro 1</h5>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookModal1">
                                        Ver Detalles
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Repite el bloque de abajo para cada libro -->
                        <div class="col-md-3 mb-4">
                            <div class="card book-card">
                                <img src="<?php echo APP_URL; ?>app/views/img/GJ7X1mlaMAA0GUJ.jpg" class="card-img-top" alt="Título del libro">
                                <div class="card-body">
                                    <h5 class="card-title">Título del Libro 2</h5>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookModal1">
                                        Ver Detalles
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Agregar más tarjetas de libros según sea necesario -->

                    </div>
                </div>
            </div>
        </main>

        <!-- Modal -->
        <div class="modal fade" id="bookModal1" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bookModalLabel">Título del Libro 1</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Autor: John Doe</p>
                        <p>Descripción: Una descripción breve del libro.</p>
                        <button type="button" class="btn btn-success">Reservar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
