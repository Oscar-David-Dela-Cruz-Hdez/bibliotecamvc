<?php
namespace app\controllers;

use app\models\Registro;

class UsuarioController {

    public function registrarUsuario() {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $lastname2 = $_POST['lastname2'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if ($password !== $password2) {
            header('Location: ' . APP_URL . 'registro?error=password_mismatch');
            exit();
        }

        // Usa SHA-512 para encriptar la contraseña
        $hashedPassword = hash('sha512', $password);

        $usuarioModel = new Registro();
        $resultado = $usuarioModel->registrarUsuario(
            $username, $name, $lastname, $lastname2, $email, $hashedPassword
        );

        if ($resultado) {
            header('Location: ' . APP_URL . 'principale?registro=success');
            exit();
        } else {
            header('Location: ' . APP_URL . 'registro?error=registro_fallido');
            exit();
        }
    }

    public function loginUsuario() {
        $email = $_POST['email'];
        $providedPassword = $_POST['password'];

        $usuarioModel = new Registro();
        $user = $usuarioModel->getUsuarioPorCorreo($email);

        if ($user) {
            $storedHash = $user['vchContrasena'];
            $providedHash = hash('sha512', $providedPassword);

            if ($providedHash === $storedHash) {
                echo "Contraseña correcta.";
            } else {
                echo "Contraseña incorrecta.";
            }
        } else {
            echo "Correo electrónico no encontrado.";
        }
    }
}
