<?php

include_once 'Modelo/Conexion.php';

class bibliAutor extends Conexion
{
    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = $this->getDBH();
    }

    public function AgregarAutor($nombre, $ap, $am) {
        try {
            $sql = "CALL spAgregarAutor(:nombre, :ap, :am);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':ap', $ap, PDO::PARAM_STR);
            $stmt->bindParam(':am', $am, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Agrega esto para depurar
        }
    }

    public function ConsultaAutores() {
        try {
            $sql = "CALL spConsultarAutores();";
            $stmt = $this->db->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Agrega esto para depurar
        }
    }
}
?>
