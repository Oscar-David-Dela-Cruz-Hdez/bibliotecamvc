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

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

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
}
?>
