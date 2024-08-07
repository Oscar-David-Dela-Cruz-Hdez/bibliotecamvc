<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/profilo.css">
</head>
<body>
    <div class="d-flex flex-column min-vh-100">
        <!-- contenido -->
        <main class="container mt-4 flex-fill">
            <div class="row">
                <div class="col-md-4">
                    <!-- Perfil del usuario -->
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="<?php echo APP_URL; ?>app/views/img/ef.jpg" class="rounded-circle img-fluid" alt="Avatar" style="width: 150px;">
                            <h4 class="mt-3">Oscar</h4>
                            <p class="text-muted">delacruzhernandezoscardavid@outlook.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- Información del usuario -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Información del Usuario</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" value="Oscar David De la Cruz Hernandez">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" value="delacruzhernandezoscardavid@outlook.com">
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="tel" class="form-control" id="telefono" value="7713387937">
                                </div>
                                <div class="mb-3">
                                    <label for="direccion" class="form-label">Dirección</label>
                                    <input type="text" class="form-control" id="direccion" value="no lo pongo para evitar auto doxxeo">
                                </div>
                                <button type="submit" class="btn btn-primary">Actualizar Información</button>
                            </form>
                        </div>
                    </div>

                    <!-- Historial de reservas -->
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Historial de Reservas</h5>
                            <ul class="list-group list-group-flush">
                                <!-- Ejemplo de una reserva -->
                                <li class="list-group-item">
                                    <strong>Título del Libro:</strong> Te bote remix<br>
                                    <strong>Fecha de Reserva:</strong> 07/07/2024<br>
                                    <strong>Estado:</strong> Pendiente
                                </li>
                                <!-- Añadir más reservas aquí -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
