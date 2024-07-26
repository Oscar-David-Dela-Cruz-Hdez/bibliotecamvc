<?php
namespace app\models;

use app\models\Conexion;

class LoginUsuario {

    private $conexion;

    public function __construct() {
        // Crea una instancia de Conexion y obtiene el manejador de base de datos
        $conexionModel = new Conexion();
        $this->conexion = $conexionModel->getDBH();
    }

    public function login($correo) {
        // Prepara la consulta para llamar al procedimiento almacenado
        $stmt = $this->conexion->prepare("CALL spLogin(:correo, @correo, @hashed_password, @idrol)");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();

        // Obtén los resultados del procedimiento almacenado
        $result = $this->conexion->query("SELECT @correo AS vchCorreo, @hashed_password AS vchContrasena, @idrol AS idrol");
        $usuario = $result->fetch(\PDO::FETCH_ASSOC); // Usar la clase global PDO aquí

        return $usuario;
    }
}
?>
