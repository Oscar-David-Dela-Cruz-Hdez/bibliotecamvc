<?php

namespace app\controllers;

use app\models\clsCategoria;

class controladorCategoria
{

    private $vista;

    public function mostrarCategorias() {
        $categoria = new clsCategoria();
        if (empty($_POST)) {
            $Consulta = $categoria->ConsultaCategoria();
            // Aquí se debe pasar $Consulta a la vista en lugar de incluirla directamente
            $vista = "./app/views/content/bibliotecario/admCategoria-vista.php";
            include_once("./app/views/inc/nav3.php");
        }
    }

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
        // Actualizar la consulta después de eliminar o actualizar
        $Consulta = $categoria->ConsultaCategoria();
        // Pasar $Consulta a la vista
        $vista = "./app/views/content/bibliotecario/admCategoria-vista.php";
        include_once("./app/views/inc/nav3.php");
    }
}
