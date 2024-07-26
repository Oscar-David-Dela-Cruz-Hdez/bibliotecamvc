<?php
namespace app\controllers;

use app\models\Usuario;

class UsuarioController {
    
    public function registrarUsuario() {
        // Recoger datos del formulario
        $username = $_POST['username'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $lastname2 = $_POST['lastname2'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        // Verificar si las contraseñas coinciden
        if ($password !== $password2) {
            header('Location: ' . APP_URL . 'registro?error=password_mismatch');
            exit();
        }

        // Cifrar la contraseña
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Crear una instancia del modelo
        $usuarioModel = new Usuario();

        // Llamar al método para registrar el usuario
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
