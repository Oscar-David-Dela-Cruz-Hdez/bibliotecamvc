<?php
namespace app\controllers;

use app\models\Usuario;

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

        // con esto ya cumplimos con la encriptacion de la contra, a menos que quieran hacerlo diferente
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $usuarioModel = new Usuario();
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
