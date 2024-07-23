<?php
namespace app\models;

class Conexion {
    public static function conectar() {
        $conexion = new \mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $conexion->set_charset("utf8");
        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        }
        return $conexion;
    }
}
?>
