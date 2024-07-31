<?php
namespace app\models;

require_once 'Conexion.php';

class LoginModel {
    private $dbh;

    public function __construct() {
        $this->dbh = (new Conexion())->getDBH();
    }

    public function login($correo, $contrasena) {
        $sql = "CALL spLogin(:correo)";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($contrasena, $user['vchContrasena'])) {
                return $user;
            } else {
                return false;
            }
        }
        return false;
    }
}
?>
