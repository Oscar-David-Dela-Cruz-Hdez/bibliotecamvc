<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/documentazione.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<div class="d-flex flex-column min-vh-100">
        <main class="flex-fill">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center">Insertar Autores</h2>
                                <form id="libroForm" method="POST" action="">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="nombre" class="form-label">Nombre:</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del autor" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ap" class="form-label">Apellido Paterno:</label>
                                            <input type="text" class="form-control" id="ap" name="ap" placeholder="Ingrese el apellido paterno" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="am" class="form-label">Apellido Materno:</label>
                                            <input type="text" class="form-control" id="am" name="am" placeholder="Ingrese el apellido Materno" required>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary w-100">Agregar Autor</button>
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