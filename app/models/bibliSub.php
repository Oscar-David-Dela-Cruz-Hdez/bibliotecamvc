<?php
use app\models\Conexion;

include_once 'models/Conexion.php';

class bibliSubcategoria extends Conexion
{
    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = $this->getDBH();
    }

    // Método para agregar una nueva subcategoría
    public function AgregarSubcategoria($nombre, $idcategoria) {
        try {
            $sql = "CALL InsertarSubcategoria(:nombre, :idcategoria);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':idcategoria', $idcategoria, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Para depuración
        }
    }

    // Método para consultar todas las subcategorías
    public function ConsultaSubcategorias() {
        try {
            $sql = "CALL spConsultarSubcategorias();";
            $stmt = $this->db->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Para depuración
        }
    }

    // Método para consultar todas las categorías
    public function ConsultaCategorias() {
        try {
            $sql = "CALL spConsultarCategorias();";
            $stmt = $this->db->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Para depuración
        }
    }
}
?>
