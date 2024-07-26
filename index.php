<?php

require_once "./config/applicazione.php";
require_once "./autoload.php";

use app\controllers\vistaControllore;

// esta wea maneraja el registro de usuarios
if (isset($_GET['action']) && $_GET['action'] == 'registrarUsuario') {
    $usuarioController = new \app\controllers\UsuarioController();
    $usuarioController->registrarUsuario();
    exit();
}

// Pagrege esto para parsear la url y que determine que controlador usara
if (isset($_GET['views'])) {
    $url = explode("/", $_GET['views']);
} else {
    $url = ["principale"];
}

$vistaControllore = new vistaControllore();
$vista = $vistaControllore->obtenerVistasControlador($url[0]);

// y agrege esto para que la web no se rompa y la rediriga a el inicio de secion
if (isset($_GET['registro']) && $_GET['registro'] == 'success') {
    header('Location: ' . APP_URL . 'iniziaSessione');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<?php require_once "./app/views/inc/testa.php"; ?>

<body style="background: url('<?php echo APP_URL; ?>app/views/img/659155.jpg') no-repeat center / cover;">
    <div class="d-flex flex-column min-vh-100">
        <!-- header y nav  -->
        <?php include 'app/views/inc/nav1.php'; ?>

        <!-- llama a las vistas  -->
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
