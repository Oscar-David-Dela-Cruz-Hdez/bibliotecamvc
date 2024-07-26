<?php

require_once "./config/applicazione.php";
require_once "./autoload.php";

// Eliminar lógica de inicio de sesión
if(isset($_GET['views'])){
    $url = explode("/", $_GET['views']);
}else{
    $url = ["principale"];
}

use app\controllers\vistaControllore;

$vistaControllore = new vistaControllore();
$vista = $vistaControllore->obtenerVistasControlador($url[0]);

// Redirigir después de registro exitoso
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
        <!-- Incluir el header y navbar -->
        <?php include 'app/views/inc/nav1.php'; ?>

        <!-- Contenido dinámico -->
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
</body>
</html>
