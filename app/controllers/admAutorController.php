<?php

include_once('Modelo/clsCategoria.php');

class controladorAutor
{
    public function EliminaActualizaAutor() {
        $autor = new clsAutor();
    
        if (isset($_POST['btnEliminar'])) {
            $idAutor = $_POST['txtidautor'];
            $autor->EliminarAutor($idAutor);
        } elseif (isset($_POST['btnActualizar'])) {
            $idAutor = $_POST['txtidautor'];
            $nombre = $_POST['txtNombre'];
            $ap = $_POST['txtAp'];
            $am = $_POST['txtAm'];
            $autor->ActualizarAutor($idAutor,$nombre,$ap,$am);
        }
    
        $Consulta = $autor->ConsultaAutor();
        var_dump($Consulta); // Agrega esto para depurar
    
        include_once('bibliotecaMvc/app/views/content/bibliotecario/admAutores-vista.php');
    }
    
}
?>
