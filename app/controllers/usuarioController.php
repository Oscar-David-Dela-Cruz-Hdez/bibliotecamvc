<?php
namespace app\controllers;

use app\models\Usuario;

class UsuarioController {
    public function registrarUsuario() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = new Usuario();
            $usuario->setUsuario($_POST['username']);
            $usuario->setNombre($_POST['name']);
            $usuario->setApellidoP($_POST['lastname']);
            $usuario->setApellidoM($_POST['lastname2']);
            $usuario->setCorreo($_POST['email']);
            $usuario->setContrasena($_POST['password']);
            $usuario->setIdRol(2); // Rol de usuario

            $resultado = $usuario->registrar();

            if ($resultado) {
                header("Location: " . APP_URL . "iniziaSessione/");
                exit();
            } else {
                echo "Error al registrar el usuario";
            }
        }
    }
}
?>
