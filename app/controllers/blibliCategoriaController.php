<?php

include_once('Modelo/bibliCategoria.php');

class bibliCategoriaController
{
    // Método para manejar la inserción de una nueva categoría
    public function agregarCategoria() {
        // Crear una instancia del modelo
        $categoriaModel = new bibliCategoria();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener el nombre de la categoría del formulario
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';

            if (!empty($nombre)) {
                // Llamar al método del modelo para agregar la categoría
                $categoriaModel->AgregarCategoria($nombre);
            }
        }

        // Consultar todas las categorías después de agregar la nueva
        $categorias = $categoriaModel->ConsultaCategorias();

        // Incluir la vista para mostrar las categorías
        include_once('bibliotecaMvc/app/views/content/bibliotecario/admCategorias-vista.php');
    }
}
?>
