
<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/libri.css">

    <div class="d-flex flex-column min-vh-100">
    
       

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2 flex-grow-1" type="search" placeholder="Buscar libros" aria-label="Buscar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
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
                                <div class="form-group">
                                    <label for="filter-author">Ordenar por Autor</label>
                                    <select class="form-control" id="filter-author">
                                        <option>A - Z</option>
                                        <option>Z - A</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="filter-category">Categoría</label>
                                    <select class="form-control" id="filter-category">
                                        <option>Ficción</option>
                                        <option>No Ficción</option>
                                        <option>Biografía</option>
                                        <option>Infantil</option>
                                        <option>Misterio</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="filter-year">Año de Publicación</label>
                                    <select class="form-control" id="filter-year">
                                        <option>Más recientes primero</option>
                                        <option>Más antiguos primero</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Aplicar Filtros</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- grid de libros -->
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card book-card">
                                <div class="card-img-wrapper">
                                    <img src="<?php echo APP_URL; ?>app/views/img/2-1.png" class="card-img-top" alt="Título del libro">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Título del Libro 1</h5>
                                    <!-- Botón para abrir el modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookModal1">
                                    Ver Detalles
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card book-card">
                                <div class="card-img-wrapper">
                                    <img src="<?php echo APP_URL; ?>app/views/img/GJ7X1mlaMAA0GUJ.jpg" class="card-img-top" alt="Título del libro">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Título del Libro 2</h5>
                                    <!-- Botón para abrir el modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookModal1">
                                    Ver Detalles
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card book-card">
                                <div class="card-img-wrapper">
                                    <img src="<?php echo APP_URL; ?>app/views/img/GLJZ4PpW0AAM8z3.jpg" class="card-img-top" alt="Título del libro">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Título del Libro 3</h5>
                                    <!-- Botón para abrir el modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookModal1">
                                    Ver Detalles
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card book-card">
                                <div class="card-img-wrapper">
                                    <img src="<?php echo APP_URL; ?>app/views/img/GNbG8Y9X0AAxTXu.png" class="card-img-top" alt="Título del libro">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Título del Libro 4</h5>
                                    <!-- Botón para abrir el modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookModal1">
                                    Ver Detalles
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card book-card">
                                <div class="card-img-wrapper">
                                    <img src="<?php echo APP_URL; ?>app/views/img/GNfJzMdWUAAWUms.jpg" class="card-img-top" alt="Título del libro">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Título del Libro 5</h5>
                                    <!-- Botón para abrir el modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookModal1">
                                    Ver Detalles
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card book-card">
                                <div class="card-img-wrapper">
                                    <img src="<?php echo APP_URL; ?>app/views/img/GNU3gtyWAAAyKOl.jpg" class="card-img-top" alt="Título del libro">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Título del Libro 6</h5>
                                    <!-- Botón para abrir el modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookModal1">
                                    Ver Detalles
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card book-card">
                                <div class="card-img-wrapper">
                                    <img src="<?php echo APP_URL; ?>app/views/img/rcecexz50rk71.jpg" class="card-img-top" alt="Título del libro">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Título del Libro 7</h5>
                                    <!-- Botón para abrir el modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookModal1">
                                    Ver Detalles
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card book-card">
                                <div class="card-img-wrapper">
                                    <img src="<?php echo APP_URL; ?>app/views/img/Sin_título.jpg" class="card-img-top" alt="Título del libro">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Título del Libro 8</h5>
                                    <!-- Botón para abrir el modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookModal1">
                                    Ver Detalles
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

            <!-- Modal -->
    <div class="modal fade" id="bookModal1" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookModalLabel">Título del Libro 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Información del libro -->
                    <p>Autor: John Doe</p>
                    <p>Descripción: Una descripción breve del libro.</p>
                    <!-- Opción para reservar -->
                    <button type="button" class="btn btn-success">Reservar</button>
                </div>
            </div>
        </div>
    </div>

          <!-- CUIDADO PELIGRO, VISTA EN CONSTRUCCION -->
    </div>