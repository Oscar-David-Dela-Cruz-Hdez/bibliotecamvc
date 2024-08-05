<?php
namespace app\models;

use PDO;

class Registro {
    private $db;

    public function __construct() {
        $this->db = new Conexion();
    }

    public function registrarUsuario($username, $name, $lastname, $lastname2, $email, $password) {
        try {
            $query = "CALL InsertarCliente(:username, :name, :lastname, :lastname2, :email, :password, :imgusuario, :idrol)";
            $stmt = $this->db->getDBH()->prepare($query);

            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':lastname2', $lastname2);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $imgusuario = "app/views/img/user.png";
            $stmt->bindParam(':imgusuario', $imgusuario);
            $idrol = 1;
            $stmt->bindParam(':idrol', $idrol);

            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }

    public function getUsuarioPorCorreo($email) {
        try {
            $query = "CALL spLogin(:correo)";
            $stmt = $this->db->getDBH()->prepare($query);
            $stmt->bindParam(':correo', $email);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            return false;
        }
    }
}
