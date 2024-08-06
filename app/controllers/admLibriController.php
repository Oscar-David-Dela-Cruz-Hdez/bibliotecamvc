<?php

include_once('Modelo/clsLibros.php');

class controladorLibros
{
    public function EliminaActualizaLibros()
    {
        $libros = new clsLibros();

        if (isset($_POST['btnEliminar'])) {
            $idlibro = $_POST['txtidlibro'];
            $libros->EliminarLibros($idlibro);
        } elseif (isset($_POST['btnActualizar'])) {
            $idlibro = $_POST['txtidlibro'];
            $titulo = $_POST['txtTitulo'];
            $anio = $_POST['txtaño'];
            $imagen = $_POST['txtimagen'];
            $subcategoria = $_POST['txtidsubcategoria'];
            $libros->ActualizarLibros($idlibro, $titulo, $anio, $imagen, $subcategoria);
        }

        $Consulta = $libros->ConsultaLibros();

        // Asegúrate de que la vista reciba la variable $Consulta correctamente.
        include_once('bibliotecaMvc/app/views/content/bibliotecario/admLibri-vista.php');
    }
}
?>
