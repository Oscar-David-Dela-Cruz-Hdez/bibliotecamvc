<?php

require_once "./config/applicazione.php";
require_once "./autoload.php";

use app\controllers\vistaControllore;
use app\controllers\LoginController;

// Manejo de registros de usuarios
if (isset($_GET['action']) && $_GET['action'] == 'registrarUsuario') {
    $usuarioController = new \app\controllers\UsuarioController();
    $usuarioController->registrarUsuario();
    exit();
}

// Manejo del inicio de sesión
if (isset($_POST['action']) && $_POST['action'] == 'login') {
    $loginController = new LoginController();
    $loginController->login();
    exit();
}

// Parseo de la URL y determinación del controlador
$url = isset($_GET['views']) ? explode("/", $_GET['views']) : ["principale"];
$vistaControllore = new vistaControllore();
$vista = $vistaControllore->obtenerVistasControlador($url[0]);

// Redirige a la página de inicio de sesión si es necesario
if (isset($_GET['registro']) && $_GET['registro'] == 'success') {
    header('Location: ' . APP_URL . 'iniziaSessione');
    exit();
}

session_start();
?>
<!DOCTYPE html>
<html lang="es">

<?php require_once "./app/views/inc/testa.php"; ?>

<body style="background: url('<?php echo APP_URL; ?>app/views/img/659155.jpg') no-repeat center / cover;">
    <div class="d-flex flex-column min-vh-100">
        <!-- header y nav -->
        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
            include 'app/views/inc/nav2.php'; // Nav para usuarios autenticados
        } else {
            include 'app/views/inc/nav1.php'; // Nav para usuarios no autenticados
        }
        ?>

        <!-- llama a las vistas -->
        <main class="container mt-5 flex-fill">
            <?php
            if ($vista == "principale" || $vista == "404") {
                require_once "./app/views/content/public/" . $vista . "-vista.php";
            } else {
                require_once $vista;
            }
            ?>
        </main>

        <?php require_once "./app/views/inc/footer.php"; ?>
        <script src="<?php echo APP_URL; ?>app/views/js/cita.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
</body>
</html>
