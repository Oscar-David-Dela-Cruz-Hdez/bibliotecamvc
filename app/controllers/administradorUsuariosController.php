<?php
namespace app\controllers;

use app\models\AdministradorUsuarios;

class AdministradorUsuariosController {
    private $administradorUsuarios;

    public function __construct() {
        $this->administradorUsuarios = new AdministradorUsuarios();
    }

    /* public function mostrarUsuarios() {
        $usuarios = $this->administradorUsuarios->obtenerUsuarios();
        
        // Pasar los datos a la vista
        include './app/views/content/admin/admUsuarios-vista.php';
    } */

    public function mostrarUsuarios() {
        $usuarios = $this->administradorUsuarios->obtenerUsuarios();
        
        // Mostrar los datos en formato JSON para depuración
        header('Content-Type: application/json');
        echo json_encode($usuarios);
    }
    
}
