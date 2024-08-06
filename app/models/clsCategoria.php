<?php

include_once 'Modelo/Conexion.php';

class clsCategoria extends clsConexion
{
    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = $this->getDBH();
    }

    public function ConsultaCategoria() {
        try {
            $sql = "CALL spConsultarCategoria();";
            $stmt = $this->db->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // Eliminar el var_dump después de confirmar que los datos son correctos
            // var_dump($result);  
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Agrega esto para depurar
        }
    }

    public function EliminarCategoria($idcategoria) {
        try {
            $sql = "CALL spEliminarCategoria(:idcategoria);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':idcategoria', $idcategoria, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Agrega esto para depurar
        }
    }

    public function ActualizarCategoria($idcategoria, $categorias) {
        try {
            $sql = "CALL spActualizarCategoria(:idcategoria, :categorias);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':idcategoria', $idcategoria, PDO::PARAM_INT);
            $stmt->bindParam(':categorias', $categorias, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Agrega esto para depurar
        }
    }
}
?>
