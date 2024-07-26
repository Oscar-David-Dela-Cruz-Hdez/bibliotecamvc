<?php
require_once './app/models/Conexion.php';

use app\models\Conexion;

$conexion = new Conexion();

if ($conexion) {
    echo "Conexión exitosa!";
} else {
    echo "Error en la conexión.";
}
