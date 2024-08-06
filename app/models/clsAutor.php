<?php

include_once 'Modelo/Conexion.php';

class clsAutor extends clsConexion
{
    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = $this->getDBH();
    }

    public function ConsultaAutor() {
        try {
            $sql = "CALL spConsultarAutor();";
            $stmt = $this->db->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            var_dump($result); // Agrega esto para depurar
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Agrega esto para depurar
        }
    }
    
    

    public function EliminarAutor($idautor) {
        $sql = "CALL spEliminarAutor(:idautor);";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':idautor', $idautor, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function ActualizarAutor($idAutor,$nombre,$ap,$am) {
        $sql = "CALL spActualizarAutor(:idAutor, :nombre, :ap, :am);";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':idAutor', $idAutor, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':ap', $ap, PDO::PARAM_STR);
        $stmt->bindParam(':am', $am, PDO::PARAM_STR);
        $stmt->execute();
    }   
}
?>
