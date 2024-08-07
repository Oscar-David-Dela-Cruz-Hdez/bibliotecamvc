<?php
// index.php

require_once "./config/applicazione.php";
require_once "./autoload.php";

use app\controllers\vistaControllore;
use app\controllers\UsuarioController;
use app\controllers\admUsuarioController;
use app\models\Usuario;

// Iniciar sesión
session_start();

// Manejo del cierre de sesión
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $sessionController = new \app\controllers\sessioneControllore();
    $sessionController->logout();
}

// Manejo del inicio de sesión
if (isset($_POST['action']) && $_POST['action'] == 'iniciarSesion') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $usuarioModel = new Usuario();
    $usuario = $usuarioModel->login($email);

    if ($usuario && hash('sha512', $password) === $usuario['vchContrasena']) {
        $_SESSION['idrol'] = $usuario['idrol'];
        $_SESSION['usuario'] = $usuario['vchUsuario'];

        // Redirigir a la vista principal correspondiente al rol
        switch ($usuario['idrol']) {
            case 1:
                header('Location: ' . APP_URL . 'utentePrincipale');
                
                break;
            case 2:
                header('Location: ' . APP_URL . 'bibliPrincipale');
              
                break;
            case 3:
                header('Location: ' . APP_URL . 'admPrincipale');
                break;
            default:
                header('Location: ' . APP_URL);
        }
        exit();
    } else {
        $loginError = "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}

// Manejo del registro de usuario
if (isset($_GET['action']) && $_GET['action'] == 'registrarUsuario') {
    $usuarioController = new UsuarioController();
    $usuarioController->registrarUsuario();
}

// Manejo de la lista de usuarios
if (isset($_GET['action']) && $_GET['action'] == 'mostrarUsuarios') {
    $adminUsuarioController = new admUsuarioController();
    $adminUsuarioController->mostrarUsuarios();
    exit();
}

// Obtener el rol de la sesión
$idrol = $_SESSION['idrol'] ?? null;

// Determina el nav basado en el rol
switch ($idrol) {
    case 1:
        $nav = "nav2"; // Usuario
        break;
    case 2:
        $nav = "nav3"; // Bibliotecario
        break;
    case 3:
        $nav = "nav4"; // Admin
        break;
    default:
        $nav = "nav1"; // No registrado
}

if (isset($_GET['registro']) && $_GET['registro'] == 'success') {
    header('Location: ' . APP_URL . 'iniziaSessione');
    exit();
}

// Determinar la vista y el archivo de navegación
$url = isset($_GET['views']) ? explode("/", $_GET['views']) : ["principale"];
$vistaControllore = new vistaControllore();
$vista = $vistaControllore->obtenerVistasControlador($url[0], $nav);

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
            if (isset($loginError)) {
                echo "<div class='alert alert-danger'>$loginError</div>";
            }
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