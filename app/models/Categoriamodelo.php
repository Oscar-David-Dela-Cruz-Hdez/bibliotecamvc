<?php
namespace app\models;

use PDO;
use PDOException;

require_once 'Conexion.php';

class CategoriaModelo {
    private $dbh;

    public function __construct() {
        $this->dbh = (new Conexion())->getDBH();
    }

    public function agregarCategoria($idCategoria, $nombreCategoria) {
        try {
            $stmt = $this->dbh->prepare("CALL spAgregarCategoria(:idcategoria, :nombreCategoria)");
            $stmt->bindParam(':idcategoria', $idCategoria, PDO::PARAM_INT);
            $stmt->bindParam(':nombreCategoria', $nombreCategoria, PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Error al agregar categoría: " . $e->getMessage();
            return false;
        }
    }

    public function consultarCategorias() {
        try {
            // Utiliza la conexión almacenada en $this->dbh
            $sql = "CALL spConsultarCategoria()";
            $stmt = $this->dbh->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Error al consultar categorías: " . $e->getMessage();
            return [];
        }
    }

    public function eliminarCategoria($idCategoria) {
        try {
            $stmt = $this->dbh->prepare("CALL spEliminarCategoria(:idCategoria)");
            $stmt->bindParam(':idCategoria', $idCategoria, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Error al eliminar categoría: " . $e->getMessage();
            return false;
        }
    }

    public function actualizarCategoria($idCategoria, $nombreCategoria) {
        try {
            $stmt = $this->dbh->prepare("CALL spActualizarCategoria(:idcategoria, :nombreCategoria)");
            $stmt->bindParam(':idcategoria', $idCategoria, PDO::PARAM_INT);
            $stmt->bindParam(':nombreCategoria', $nombreCategoria, PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo "Error al actualizar categoría: " . $e->getMessage();
            return false;
        }
    }
    
    


}
