<?php
use app\models\Conexion;

include_once 'models/Conexion.php';

class bibliLibro extends Conexion
{
    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = $this->getDBH();
    }

    // Método para agregar un nuevo libro
    public function AgregarLibro($titulo, $anio, $imagenPath, $subcategoria) {
        try {
            $sql = "CALL spAgregarLibro(:titulo, :anio, :imagenPath, :subcategoria);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':titulo', $titulo, PDO::PARAM_STR);
            $stmt->bindParam(':anio', $anio, PDO::PARAM_STR);
            $stmt->bindParam(':imagenPath', $imagenPath, PDO::PARAM_STR);
            $stmt->bindParam(':subcategoria', $subcategoria, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Para depuración
        }
    }

    // Método para consultar todos los libros
    public function ConsultaLibros() {
        try {
            $sql = "CALL spConsultarLibros();";
            $stmt = $this->db->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Para depuración
        }
    }
}
?>
