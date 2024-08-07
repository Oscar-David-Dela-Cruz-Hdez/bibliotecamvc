<?php

require_once 'app/models/admUsuario.php';

use app\models\admUsuario;

class admUsuarioController {
    private $modelo;

    public function __construct() {
        $this->modelo = new admUsuario();
    }

    public function mostrarUsuarios() {
        $usuarios = $this->modelo->obtenerUsuarios();
        require 'app/views/content/admin/admUsuarios-vista.php';
    }

    public function agregarUsuario($data) {
        $this->modelo->insertarUsuario($data['usuario'], $data['nombre'], $data['ap'], $data['am'], $data['correo'], $data['contrasena'], $data['imgusuario'], $data['idrol']);
        header('Location: index.php?c=admUsuario&a=mostrarUsuarios');
    }

    public function editarUsuario($id, $data) {
        $this->modelo->actualizarUsuario($id, $data['usuario'], $data['nombre'], $data['ap'], $data['am'], $data['correo'], $data['contrasena'], $data['imgusuario'], $data['idrol']);
        header('Location: index.php?c=admUsuario&a=mostrarUsuarios');
    }

    public function eliminarUsuario($id) {
        $this->modelo->eliminarUsuario($id);
        header('Location: index.php?c=admUsuario&a=mostrarUsuarios');
    }
}
