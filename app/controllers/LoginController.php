<?php
namespace app\controllers;

use app\models\LoginUsuario;

class LoginController {
    private $loginUsuario;

    public function __construct() {
        $this->loginUsuario = new LoginUsuario();
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo = $_POST['correo'];
            $password = $_POST['contrasena'];

            // Pasar solo el correo al método login
            $usuario = $this->loginUsuario->login($correo);

            if ($usuario && password_verify($password, $usuario['vchContrasena'])) {
                // Inicio de sesión exitoso
                session_start();
                $_SESSION['usuario'] = $usuario['vchCorreo'];
                $_SESSION['idrol'] = $usuario['idrol'];

                header("Location: " . APP_URL . "principale/");
                exit();
            } else {
                // Error en el inicio de sesión
                session_start();
                $_SESSION['login_error'] = "Correo o contraseña incorrectos.";

                header("Location: " . APP_URL . "login");
                exit();
            }
        }
    }
}
?>
