<?php

include_once('Modelo/clsCategoria.php');

class controladorLibros
{
    public function EliminaActualizaCategoria()
    {
        $categoria = new clsCategoria();

        if (isset($_POST['btnEliminar'])) {
            $idcategoria = $_POST['txtidcategoria'];
            $categoria->EliminarCategoria($idcategoria);
        } elseif (isset($_POST['btnActualizar'])) {
            $idcategoria = $_POST['txtidcategoria'];
            $categorias = $_POST['txtCategoria'];
            $categoria->ActualizarCategoria($idcategoria, $categorias);
        }

        $Consulta = $categoria->ConsultaCategoria();

        // Asegúrate de que la vista reciba la variable $Consulta correctamente.
        include_once('bibliotecaMvc/app/views/content/bibliotecario/admCategoria-vista.php');
    }
}
?>
