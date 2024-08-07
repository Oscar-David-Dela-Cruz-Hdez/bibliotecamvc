<?php

include_once('models/bibliSubcategoria.php');

class bibliSubcategoriaController
{
    // Método para manejar la inserción de una nueva subcategoría
    public function agregarSubcategoria() {
        // Crear una instancia del modelo
        $subcategoriaModel = new bibliSubcategoria();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener el nombre y la categoría de la subcategoría del formulario
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
            $idcategoria = isset($_POST['idcategoria']) ? $_POST['idcategoria'] : '';

            if (!empty($nombre) && !empty($idcategoria)) {
                // Llamar al método del modelo para agregar la subcategoría
                $subcategoriaModel->AgregarSubcategoria($nombre, $idcategoria);
            }
        }

        // Consultar todas las subcategorías después de agregar la nueva
        $subcategorias = $subcategoriaModel->ConsultaSubcategorias();
        $categorias = $subcategoriaModel->ConsultaCategorias();

        // Incluir la vista para mostrar las subcategorías
        include_once('bibliotecaMvc/app/views/content/bibliotecario/admSubcategorias-vista.php');
    }
}
?>
