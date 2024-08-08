<?php
namespace app\models;

require_once 'Conexion.php';

use PDO;
use PDOException;

class AdmUsuario {
    private $db;

    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->getDBH();
    }

    public function obtenerUsuarios() {
        try {
            $stmt = $this->db->prepare("CALL spConsultarUsuarios()");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Manejo de errores: puedes loguear o mostrar el error para depuración
            error_log("Error al obtener usuarios: " . $e->getMessage());
            return [];
        }
    }


    public function actualizarUsuario($idusuario, $usuario, $nombre, $ap, $am, $correo, $contrasena, $imgusuario, $idrol) {
        try {
            $stmt = $this->db->prepare("CALL spActualizarUsuario(:idusuario, :usuario, :nombre, :ap, :am, :correo, :contrasena, :imgusuario, :idrol)");
            $stmt->bindParam(":idusuario", $idusuario);
            $stmt->bindParam(":usuario", $usuario);
            $stmt->bindParam(":nombre", $nombre);
            $stmt->bindParam(":ap", $ap);
            $stmt->bindParam(":am", $am);
            $stmt->bindParam(":correo", $correo);
            $stmt->bindParam(":contrasena", $contrasena);
            $stmt->bindParam(":imgusuario", $imgusuario);
            $stmt->bindParam(":idrol", $idrol);
            return $stmt->execute();
        } catch (PDOException $e) {
            // Manejo de errores: puedes loguear o mostrar el error para depuración
            error_log("Error al actualizar usuario: " . $e->getMessage());
            return false;
        }
    }

    public function eliminarUsuario($idusuario) {
        try {
            $stmt = $this->db->prepare("CALL spEliminarUsuario(:idusuario)");
            $stmt->bindParam(":idusuario", $idusuario);
            return $stmt->execute();
        } catch (PDOException $e) {
            // Manejo de errores: puedes loguear o mostrar el error para depuración
            error_log("Error al eliminar usuario: " . $e->getMessage());
            return false;
        }
    }
}
