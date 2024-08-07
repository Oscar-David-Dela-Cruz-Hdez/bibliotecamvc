<?php
use app\models\Conexion;

include_once 'models/Conexion.php';

class bibliCategoria extends Conexion
{
    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = $this->getDBH();
    }

    public function AgregarCategoria($nombre) {
        try {
            $sql = "CALL spAgregarCategoria(:nombre);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->execute();
            echo "Categoría agregada exitosamente.";
        } catch (PDOException $e) {
            if ($e->getCode() == '45000') {
                echo "Error: La categoría ya existe.";
            } else {
                echo "Error: " . $e->getMessage(); // Para depurar otros errores
            }
        }
    }

    public function ConsultaCategorias() {
        try {
            $sql = "SELECT * FROM tblcategoria";
            $stmt = $this->db->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Para depurar errores
        }
    }

    public function EliminarCategoria($idcategoria) {
        try {
            $sql = "CALL spEliminarCategoria(:idcategoria);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':idcategoria', $idcategoria, PDO::PARAM_INT);
            $stmt->execute();
            echo "Categoría eliminada exitosamente.";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Para depurar errores
        }
    }

    public function ActualizarCategoria($idcategoria, $nombre) {
        try {
            $sql = "CALL spActualizarCategoria(:idcategoria, :nombre);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':idcategoria', $idcategoria, PDO::PARAM_INT);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->execute();
            echo "Categoría actualizada exitosamente.";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Para depurar errores
        }
    }
}
?>
