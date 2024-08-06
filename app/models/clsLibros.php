<?php

include_once 'Modelo/Conexion.php';

class clsLibros extends clsConexion
{
    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = $this->getDBH();
    }

    public function ConsultaLibros() {
        $sql = "CALL spConsultarLibros();";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function EliminarLibros($idlibro) {
        $sql = "CALL spEliminarLibros(:idlibro);";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':idlibro', $idlibro, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function ActualizarLibros($idlibro, $titulo, $anio, $imagen, $subcategoria) {
        $sql = "CALL spActualizarLibros(:idlibro, :titulo, :anio, :imagen, :subcategoria);";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':idlibro', $idlibro, PDO::PARAM_INT);
        $stmt->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $stmt->bindParam(':anio', $anio, PDO::PARAM_STR);
        $stmt->bindParam(':imagen', $imagen, PDO::PARAM_STR);
        $stmt->bindParam(':subcategoria', $subcategoria, PDO::PARAM_INT);
        $stmt->execute();
    }   
}
?>
