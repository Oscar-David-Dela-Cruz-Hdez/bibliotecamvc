<?php
namespace app\models;

require_once __DIR__ . '/Conexion.php';

class AdmUsuario {
    private $dbh;

    public function __construct() {
        $this->dbh = (new Conexion())->getDBH();
    }

    public function obtenerUsuarios() {
        try {
            $stmt = $this->dbh->prepare("SELECT * FROM tblusuarios");
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            echo "Error al obtener usuarios: " . $e->getMessage();
            return [];
        }
    }
}
?>
