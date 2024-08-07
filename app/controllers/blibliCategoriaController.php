<?php

include_once('models/bibliCategoria.php');

class controladorCategoria
{
    public function EliminaActualizaCategoria() {
        $categoria = new bibliCategoria();
    
        if (isset($_POST['btnEliminar'])) {
            $idcategoria = $_POST['txtidcategoria'];
            $categoria->EliminarCategoria($idcategoria);
        } elseif (isset($_POST['btnActualizar'])) {
            $idcategoria = $_POST['txtidcategoria'];
            $nombre = $_POST['txtCategoria'];
            $categoria->ActualizarCategoria($idcategoria, $nombre);
        } elseif (isset($_POST['btnAgregar'])) {
            $nombreCategoria = $_POST['nombre'];
            $categoria->AgregarCategoria($nombreCategoria);
        }
    
        $Consulta = $categoria->ConsultaCategorias();
        var_dump($Consulta); // Para depurar
    
        include_once('bibliotecaMvc/app/views/content/bibliotecario/admCategoria-vista.php');
    }
}
?>
