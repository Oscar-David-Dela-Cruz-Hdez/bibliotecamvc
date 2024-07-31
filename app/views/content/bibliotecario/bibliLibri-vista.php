<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/documentazione.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<div class="d-flex flex-column min-vh-100">
        <main class="flex-fill">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center">Insertar Libro</h2>
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
            </div>
        </main>
    </div>
