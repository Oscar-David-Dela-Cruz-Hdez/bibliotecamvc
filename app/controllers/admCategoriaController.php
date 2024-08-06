<?php

include_once('Modelo/clsCategoria.php');

class controladorCategoria
{
    public function EliminaActualizaCategoria() {
        $categoria = new clsCategoria();
    
        if (isset($_POST['btnEliminar'])) {
            $idcategoria = $_POST['txtidcategoria'];
            $categoria->EliminarCategoria($idcategoria);
        } elseif (isset($_POST['btnActualizar'])) {
            $idcategoria = $_POST['txtidcategoria'];
            $categorias = $_POST['txtCategoria'];
            $categoria->ActualizarCategoria($idcategoria, $categorias);
        }
        
        // Después de eliminar o actualizar, mostrar las categorías
        $this->mostrarCategorias();
    }

    public function mostrarCategorias() {
        $categoria = new clsCategoria();
        $Consulta = $categoria->ConsultaCategoria();
        // Eliminar el var_dump después de confirmar que los datos son correctos
        // var_dump($Consulta);
    
        include_once('./app/views/content/bibliotecario/admCategoria-vista.php');
    }
}
?>
