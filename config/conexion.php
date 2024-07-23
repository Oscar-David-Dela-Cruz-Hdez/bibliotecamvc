<?php

namespace app\config;

use mysqli;

class Conexion {
    public static function conectar() {
        $conexion = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        }

        return $conexion;
    }
}
?>
