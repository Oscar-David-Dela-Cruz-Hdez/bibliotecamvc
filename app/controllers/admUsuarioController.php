<?php
namespace app\controllers;

use app\models\admUsuario;

class AdminUsuarioController {
    public function mostrarUsuarios() {
        // Crear una instancia del modelo
        $adminUsuarioModel = new AdminUsuario();
        // Obtener todos los usuarios
        $usuarios = $adminUsuarioModel->obtenerUsuarios();
        // Incluir la vista y pasarle los datos
        require_once "./app/views/content/admin/admUsuarios-vista.php";
    }
}
