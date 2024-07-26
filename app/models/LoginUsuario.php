<?php
namespace app\models;

use PDO;
use PDOException;

require_once __DIR__ . '/Conexion.php';

class LoginUsuario {
    private $conn;

    public function __construct() {
        $this->conn = (new Conexion())->getDBH();
    }

    public function login($correo, $contrasena) {
        try {
            // Preparar el llamado al procedimiento almacenado
            $stmt = $this->conn->prepare("CALL spLogin(:correo, @hashed_password)");
            $stmt->bindParam(':correo', $correo);
            $stmt->execute();

            // Recuperar el valor del parámetro de salida
            $result = $this->conn->query("SELECT @hashed_password AS hashed_password")->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $result['hashed_password'];

            // Verificar si la contraseña es correcta
            if ($hashed_password && password_verify($contrasena, $hashed_password)) {
                return true; // Inicio de sesión exitoso
            } else {
                return false; // Credenciales incorrectas
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
?>
