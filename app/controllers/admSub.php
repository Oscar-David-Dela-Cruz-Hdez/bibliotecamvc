<?php

include_once('Modelo/clsSub.php');

class controladorSubcategoria
{
    public function EliminaActualizaSubcategoria() {
        $subcategoria = new clsSub();
    
        if (isset($_POST['btnEliminar'])) {
            $idcategoria = $_POST['txtidcategoria'];
            $subcategoria->EliminarCategoria($idcategoria);
        } elseif (isset($_POST['btnActualizar'])) {
            $idsubcategoria = $_POST['txtidsub'];
            $subcategorias = $_POST['txtsubcategoria'];
            $idcategoria = $_POST['txtidcategoria'];
            $subcategoria->ActualizarSubcategoria($idsubcategoria, $subcategorias,$idcategoria);
        }
    
        $Consulta = $subcategoria->ConsultaSubcategoria();
        var_dump($Consulta); // Agrega esto para depurar
    
        include_once('bibliotecaMvc/app/views/content/bibliotecario/admSubategoria-vista.php');
    }
    
}
?>
