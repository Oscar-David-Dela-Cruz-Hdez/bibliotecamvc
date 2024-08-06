<?php
// Modelo AdmUsuario.php
class AdmUsuario {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerUsuarios() {
        $sql = 'SELECT * FROM tblusuarios';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
