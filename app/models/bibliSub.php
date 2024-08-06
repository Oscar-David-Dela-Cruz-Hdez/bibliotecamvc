<?php

include_once 'Modelo/Conexion.php';

class bibliSubcategoria extends clsConexion
{
    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = $this->getDBH();
    }

    // Método para agregar una nueva subcategoría
    public function AgregarSubcategoria($nombre) {
        try {
            $sql = "CALL spAgregarSubcategoria(:nombre);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
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
}
?>
