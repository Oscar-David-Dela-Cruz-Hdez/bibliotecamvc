<?php

require_once "./config/applicazione.php";
require_once "./autoload.php";

use app\controllers\vistaControllore;

//  registros de usuarios
if (isset($_GET['action']) && $_GET['action'] == 'registrarUsuario') {
    $usuarioController = new \app\controllers\UsuarioController();
    $usuarioController->registrarUsuario();
    exit();
}

//no muevan esta wea porfa  aaaaaaaaaaaaaaaaaaaaaaaAAAAAAAAAAAAAAAAAAAAA
$url = isset($_GET['views']) ? explode("/", $_GET['views']) : ["principale"];
$nav = isset($_GET['nav']) ? $_GET['nav'] : "nav2"; // Determina el nav actual
$vistaControllore = new vistaControllore();
$vista = $vistaControllore->obtenerVistasControlador($url[0], $nav);


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
        <!-- header y nav -->
        <?php
        $navFile = "./app/views/inc/" . $nav . ".php";
        if (file_exists($navFile)) {
            include $navFile;
        } else {
            include "./app/views/inc/nav1.php"; // nav predeterminado
        }
        ?>

        <!-- llama a las vistas -->
        <main class="container mt-5 flex-fill">
            <?php
            if (file_exists($vista)) {
                require_once $vista;
            } else {
                require_once "./app/views/content/public/404-vista.php";
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
