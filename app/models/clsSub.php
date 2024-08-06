<?php

include_once 'Modelo/Conexion.php';

class clsSub extends clsConexion
{
    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = $this->getDBH();
    }

    public function ConsultaSubcategoria() {
        try {
            $sql = "CALL spConsultarSubcategoria();";
            $stmt = $this->db->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            var_dump($result); // Agrega esto para depurar
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Agrega esto para depurar
        }
    }
    
    

    public function EliminarSubcategoria($idsubcategoria) {
        $sql = "CALL spEliminarSubcategoria(:idsubcategoria);";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':idsubcategoria', $idsubcategoria, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function ActualizarSubcategoria($idsubcategoria, $subcategorias,$idcategoria) {
        $sql = "CALL spActualizarSubcategoria(:idsubcategoria, :subcategorias, :idcategoria);";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':idsubcategoria', $idsubcategoria, PDO::PARAM_INT);
        $stmt->bindParam(':subcategorias', $subcategorias, PDO::PARAM_STR);
        $stmt->bindParam(':idcategoria', $idcategoria, PDO::PARAM_INT);
        $stmt->execute();
    }   
}
?>
