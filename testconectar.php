<?php
require_once './app/models/Conexion.php';

use app\models\Conexion;

$conexion = new Conexion();

if ($conexion) {
    echo "Conexión exitosa!";
} else {
    echo "Cconexion a base de datos error de conexion";
}
