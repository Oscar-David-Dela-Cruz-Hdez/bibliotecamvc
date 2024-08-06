<?php
namespace app\controllers;

use app\models\AdmUsuario;

class AdmUsuarioController {
    private $admUsuarioModel;

    public function __construct() {
        $this->admUsuarioModel = new AdmUsuario();
    }

    public function index() {
        // Obtener la lista de usuarios
        $usuarios = $this->admUsuarioModel->obtenerUsuarios();
        // Incluir la vista y pasar los datos
        require_once 'app/views/admin/admUsuarios-vista.php';
    }
}
