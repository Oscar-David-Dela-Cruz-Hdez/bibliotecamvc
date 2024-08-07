<?php
use app\models\Conexion;

include_once 'models/Conexion.php';

class bibliAutor extends Conexion
{
    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = $this->getDBH();
    }

    public function AgregarAutor($nombre, $ap, $am) {
        try {
            $sql = "CALL InsertarAutor(:nombre, :ap, :am);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':ap', $ap, PDO::PARAM_STR);
            $stmt->bindParam(':am', $am, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Agrega esto para depurar
        }
    }

    public function EliminarAutor($idAutor) {
        try {
            $sql = "CALL spEliminarAutor(:idAutor);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':idAutor', $idAutor, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Agrega esto para depurar
        }
    }

    public function ActualizarAutor($idAutor, $nombre, $ap, $am) {
        try {
            $sql = "CALL spActualizarAutor(:idAutor, :nombre, :ap, :am);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':idAutor', $idAutor, PDO::PARAM_INT);
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
