<?php
namespace app\controllers;

use app\models\Usuario;

class UsuarioController {
    public function registrarUsuario() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtener los datos del formulario
            $username = $_POST['username'];
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $lastname2 = $_POST['lastname2'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Crear instancia del modelo Usuario
            $usuario = new Usuario();

            // Registrar el usuario
            $resultado = $usuario->registrarUsuario($username, $name, $lastname, $lastname2, $email, $password);

            if ($resultado) {
                // Redirigir a la vista de inicio de sesión
                header('Location: ' . APP_URL . 'UsuarioController/iniciaSessione');
                exit();
            } else {
                echo "Error al registrar el usuario.";
            }
        }
    }

    public function iniciaSessione() {
        // Aquí puedes cargar la vista de inicio de sesión
        require_once __DIR__ . '/../views/content/iniciaSessione.php';
    }
}
?>
