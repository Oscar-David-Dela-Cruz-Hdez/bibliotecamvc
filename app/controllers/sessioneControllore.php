<?php
namespace app\controllers;

use app\models\LoginModel;

class SessionController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['correo']) && isset($_POST['contrasena'])) {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            $loginModel = new LoginModel();
            $user = $loginModel->login($correo, $contrasena);

            if ($user) {
                session_start();
                $_SESSION['idusuario'] = $user['idusuario'];
                $_SESSION['idrol'] = $user['idrol'];
                $_SESSION['vchUsuario'] = $user['vchUsuario'];

                // Redirigir según el rol
                switch ($user['idrol']) {
                    case 1:
                        header('Location: ' . APP_URL . 'app/views/content/utente/utentePrincipale-vista.php');
                        break;
                    case 2:
                        header('Location: ' . APP_URL . 'app/views/content/bibliotecario/bibliGestion-vista.php');
                        break;
                    case 3:
                        header('Location: ' . APP_URL . 'app/views/content/admin/admPrincipale-vista.php');
                        break;
                    default:
                        header('Location: ' . APP_URL . 'app/views/public/404-vista.php');
                }
                exit();
            } else {
                session_start();
                $_SESSION['login_error'] = 'Correo o contraseña incorrectos';
                header('Location: ' . APP_URL . 'app/views/public/iniziaSessione-vista.php');
                exit();
            }
        } else {
            header('Location: ' . APP_URL . 'app/views/public/iniziaSessione-vista.php');
            exit();
        }
    }
}
?>
