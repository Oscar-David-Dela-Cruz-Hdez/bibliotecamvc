<?php
namespace app\models;

class Usuario {
    private $usuario;
    private $nombre;
    private $apellidoP;
    private $apellidoM;
    private $correo;
    private $contrasena;
    private $idRol;

    public function setUsuario($usuario) { $this->usuario = $usuario; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setApellidoP($apellidoP) { $this->apellidoP = $apellidoP; }
    public function setApellidoM($apellidoM) { $this->apellidoM = $apellidoM; }
    public function setCorreo($correo) { $this->correo = $correo; }
    public function setContrasena($contrasena) { $this->contrasena = $contrasena; }
    public function setIdRol($idRol) { $this->idRol = $idRol; }

    public function registrar() {
        $conexion = Conexion::conectar();
        $stmt = $conexion->prepare("CALL InsertarCliente(?, ?, ?, ?, ?, ?, '', ?)");
        $stmt->bind_param("ssssssi", 
            $this->usuario, 
            $this->nombre, 
            $this->apellidoP, 
            $this->apellidoM, 
            $this->correo, 
            $this->contrasena, 
            $this->idRol
        );

        $resultado = $stmt->execute();
        $stmt->close();
        $conexion->close();
        return $resultado;
    }
}
?>
