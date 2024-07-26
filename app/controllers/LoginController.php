<?php
namespace app\controllers;

use app\models\LoginUsuario;

class LoginController {
    private $loginUsuario;

    public function __construct() {
        $this->loginUsuario = new LoginUsuario();
    }

    public function login() {
        if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            // Llamar al método de login del modelo
            if ($this->loginUsuario->login($correo, $contrasena)) {
                // Inicio de sesión exitoso
                $_SESSION['logged_in'] = true;
                $_SESSION['correo'] = $correo;

                // Redirigir a la página principal con nav2
                header('Location: ' . APP_URL . 'index.php');
                exit();
            } else {
                // Credenciales incorrectas
                $_SESSION['login_error'] = 'Correo o contraseña incorrectos';
                header('Location: ' . APP_URL . 'iniziaSessione');
                exit();
            }
        }
    }
}
?>
