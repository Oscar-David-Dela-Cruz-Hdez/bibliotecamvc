<?php

include_once('Modelo/bibliAutor.php');

class bibliAutorController
{
    public function gestionarAutores() {
        $autor = new bibliAutor();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['btnAgregar'])) {
                $nombre = $_POST['nombre'];
                $ap = $_POST['ap'];
                $am = $_POST['am'];
                $autor->AgregarAutor($nombre, $ap, $am);
            } elseif (isset($_POST['btnEliminar'])) {
                $idAutor = $_POST['idAutor'];
                $autor->EliminarAutor($idAutor);
            } elseif (isset($_POST['btnActualizar'])) {
                $idAutor = $_POST['idAutor'];
                $nombre = $_POST['nombre'];
                $ap = $_POST['ap'];
                $am = $_POST['am'];
                $autor->ActualizarAutor($idAutor, $nombre, $ap, $am);
            }
        }

        $Consulta = $autor->ConsultaAutores();
        include_once('bibliotecaMvc/app/views/content/bibliotecario/admAutores-vista.php');
    }
}
?>
