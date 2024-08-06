<?php

include_once('Modelo/bibliSubcategoria.php');

class bibliSubcategoriaController
{
    // Método para manejar la inserción de una nueva subcategoría
    public function agregarSubcategoria() {
        // Crear una instancia del modelo
        $subcategoriaModel = new bibliSubcategoria();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener el nombre de la subcategoría del formulario
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';

            if (!empty($nombre)) {
                // Llamar al método del modelo para agregar la subcategoría
                $subcategoriaModel->AgregarSubcategoria($nombre);
            }
        }

        // Consultar todas las subcategorías después de agregar la nueva
        $subcategorias = $subcategoriaModel->ConsultaSubcategorias();

        // Incluir la vista para mostrar las subcategorías
        include_once('bibliotecaMvc/app/views/content/bibliotecario/admSubcategorias-vista.php');
    }
}
?>
