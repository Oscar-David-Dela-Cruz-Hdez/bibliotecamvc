<?php
// Asegúrate de incluir el autoloader de Composer si estás usando Composer
// require_once __DIR__ . '/vendor/autoload.php';

// Incluir los archivos necesarios para el controlador
require_once __DIR__ . '/app/controllers/administradorUsuariosController.php';
require_once __DIR__ . '/app/models/AdministradorUsuarios.php';

// Crear una instancia del controlador
$controller = new \app\controllers\AdministradorUsuariosController();

// Llamar al método para mostrar usuarios
$controller->mostrarUsuarios();
?>
