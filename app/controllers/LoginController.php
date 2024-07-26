<?php
namespace app\controllers;

use app\models\LoginUsuario;

class LoginController {

    public function login() {
        if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            // Crea una instancia del modelo de LoginUsuario
            $loginModel = new LoginUsuario();

            // Llama al método login del modelo
            $usuario = $loginModel->login($correo);

            // Verifica si se obtuvo el usuario
            if ($usuario && isset($usuario['vchContrasena'])) {
                // Verifica la contraseña
                if (password_verify($contrasena, $usuario['vchContrasena'])) {
                    // La contraseña es correcta
                    session_start();
                    $_SESSION['logged_in'] = true;
                    $_SESSION['user_email'] = $correo;
                    $_SESSION['user_role'] = $usuario['idrol'];

                    // Redirige según el rol del usuario
                    if ($usuario['idrol'] == 1) {
                        header('Location: ' . APP_URL . 'utentePrincipale');
                    } elseif ($usuario['idrol'] == 2) {
                        header('Location: ' . APP_URL . 'bibliotecarioPrincipal');
                    } elseif ($usuario['idrol'] == 3) {
                        header('Location: ' . APP_URL . 'adminPrincipal');
                    }
                    exit();
                } else {
                    // Contraseña incorrecta
                    session_start();
                    $_SESSION['login_error'] = 'Correo o contraseña incorrectos.';
                    header('Location: ' . APP_URL . 'iniziaSessione');
                    exit();
                }
            } else {
                // Usuario no encontrado
                session_start();
                $_SESSION['login_error'] = 'Correo o contraseña incorrectos.';
                header('Location: ' . APP_URL . 'iniziaSessione');
                exit();
            }
        }
    }
}
?>
