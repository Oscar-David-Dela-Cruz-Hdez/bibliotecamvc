<?php
// app/controllers/admUsuarioController.php
namespace app\controllers;

use app\models\admUsuario;

class admUsuarioController {
    private $admUsuarioModel;

    public function __construct() {
        $this->admUsuarioModel = new admUsuario();
    }

    public function mostrarUsuarios() {
        $usuarios = $this->admUsuarioModel->obtenerUsuarios();
        
        // Pasar los datos a la vista
        include './app/views/content/admin/admUsuarios-vista.php';
    }
}

