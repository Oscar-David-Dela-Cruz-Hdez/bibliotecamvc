<?php

namespace app\models;

use PDO;

require_once 'Conexion.php';

class Usuario {

    private $dbh;

    public function __construct() {
        $conexion = new Conexion();
        $this->dbh = $conexion->getDBH();
    }

    public function login($correo) {
        $stmt = $this->dbh->prepare("CALL spLogin(:correo)");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
