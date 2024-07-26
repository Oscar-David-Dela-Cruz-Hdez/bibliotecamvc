<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/profilo.css">
    <div class="d-flex flex-column min-vh-100">
        <!-- header -->
        <header class="header py-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center titulo">Perfil del Usuario</h1>
                    </div>
                </div>
            </div>
        </header>

        <!-- nav -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo APP_URL; ?>principale/">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>libri/">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>regolamento/">Reglamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>cerrarSesion/">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>

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
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" value="Oscar David De la Cruz Hernandez">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" value="delacruzhernandezoscardavid@outlook.com">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="tel" class="form-control" id="telefono" value="7713387937">
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" class="form-control" id="direccion" value="no lo pongo para evitar auto doxxeo">
                                </div>
                                <button type="submit" class="btn btn-primary">Actualizar Información</button>
                            </form>
<!--
           <form>
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" value="?php echo $usuario->nombre; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" value="?php echo $usuario->email; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="tel" class="form-control" id="telefono" value="?php echo $usuario->telefono; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" class="form-control" id="direccion" value="?php echo $usuario->direccion; ">
                                </div>
                                <button type="submit" class="btn btn-primary">Actualizar Información</button>
                            </form>                 
-->
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

        <!-- footer -->
        <footer class="footer mt-auto py-3">
            <div class="container">
                <p class="text-center">&copy; 2024 Biblioteca Virtual. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
