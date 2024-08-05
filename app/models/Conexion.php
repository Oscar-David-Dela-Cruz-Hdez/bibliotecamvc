<?php
namespace app\models;

use PDO;
use PDOException;

require_once __DIR__ . '/../../config/server.php';

class Conexion {
    private $host = DB_SERVER;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    private $dbh;
    private $error;

    public function __construct() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch(PDOException $e) {
            $this->error = $e->getMessage();
            echo "Error en la conexión: " . $this->error;
        }
    }

    public function getDBH() {
        return $this->dbh;
    }
}
