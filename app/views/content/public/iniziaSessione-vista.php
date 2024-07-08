
<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>

<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/inizio.css">
    <div class="d-flex flex-column min-vh-100">
    
        <!-- header -->
        <header class="header py-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">Biblioteca Virtual</h1>
                    </div>
                </div>
            </div>
        </header>

        <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
                <img src="logo.png" alt="Logo" style="width: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>principale/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>documentazione/">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>libri/">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>regolamento/">Reglamento</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- contenido -->
        <main class="container mt-5 flex-fill">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center main-text">Inicio de Sesión</h3>
                            <form>
                                <div class="form-group">
                                    <label for="email" class="main-text">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="main-text">Contraseña</label>
                                    <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="<?php echo APP_URL; ?>utentePrincipale/" class="btn btn-primary">Iniciar Sesión</a>

                                    <!--esto por el momento se quedara asi mientras hago pruebas de cambios de vista<button type="submit" class="btn btn-primary">Iniciar Sesión</button>-->
                                    <button type="button" class="btn btn-danger">Iniciar con Google</button>
                                </div>
                            </form>
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