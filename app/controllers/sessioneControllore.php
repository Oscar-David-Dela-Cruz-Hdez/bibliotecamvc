<?php
namespace app\controllers;

require_once 'app/models/Usuario.php';
require_once 'app/models/vistaModello.php';

class sessioneControllore {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            $usuarioModel = new \app\models\Usuario();
            $result = $usuarioModel->login($correo);

            if ($result) {
                $providedHash = hash('sha512', $contrasena);
                if ($providedHash === $result['vchContrasena']) {
                    $_SESSION['usuario'] = $result['vchUsuario'];
                    $_SESSION['rol'] = $result['idrol'];

                    switch ($result['idrol']) {
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
                            header('Location: ' . APP_URL . 'public');
                    }
                    exit();
                }
            }

            $_SESSION['login_error'] = 'Credenciales incorrectas';
            header('Location: ' . APP_URL . 'public/iniziaSessione');
            exit();
        }
    }

    public function logout() {
        // Destruye la sesión actual
        session_start();
        session_unset();
        session_destroy();
    
        // Redirige al usuario a la página principal pública
        header('Location: ' . APP_URL . 'public/inizaSessione-vista.php');
        exit();
    }
    
}
?>
