<?php

include_once('Modelo/bibliAutor.php');

class bibliAutorController
{
    public function AgregarAutor() {
        $autor = new bibliAutor();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $ap = $_POST['ap'];
            $am = $_POST['am'];

            $autor->AgregarAutor($nombre, $ap, $am);
        }

        $Consulta = $autor->ConsultaAutores();
        var_dump($Consulta); // Agrega esto para depurar

        include_once('bibliotecaMvc/app/views/content/bibliotecario/admAutores-vista.php');
    }
}
?>
