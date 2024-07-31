<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/inizio.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="d-flex flex-column min-vh-100">
    <main class="container mt-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center main-text">Inicio de Sesión</h3>
                        <form method="POST" action="<?php echo APP_URL; ?>index.php">
                            <input type="hidden" name="action" value="login">
                            <div class="mb-3">
                                <label for="email" class="form-label main-text">Correo Electrónico</label>
                                <input type="email" name="correo" class="form-control" id="email" placeholder="Ingrese su correo electrónico" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label main-text">Contraseña</label>
                                <div class="input-group">
                                    <input type="password" name="contrasena" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
                                    <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('password')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                                <button type="button" class="btn btn-danger">Iniciar con Google</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_SESSION['login_error'])) {
                            echo '<div class="alert alert-danger mt-3" role="alert">' . $_SESSION['login_error'] . '</div>';
                            unset($_SESSION['login_error']);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script src="<?php echo APP_URL; ?>app/views/js/inicio.js"></script>
