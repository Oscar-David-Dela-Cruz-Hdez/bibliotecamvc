<?php
namespace app\models;

use app\models\Conexion;
use PDO;

class LoginUsuario {
    private $conexion;

    public function __construct() {
        // Crea una instancia de Conexion y obtiene el manejador de base de datos
        $conexionModel = new Conexion();
        $this->conexion = $conexionModel->getDBH();
    }

    public function login($correo) {
        // Prepara la consulta para llamar al procedimiento almacenado
        $stmt = $this->conexion->prepare("CALL spLogin(:correo)");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();

        // Obtén los resultados del procedimiento almacenado
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}
?>
