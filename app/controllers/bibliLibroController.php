<?php

include_once('Modelo/bibliLibro.php');

class bibliLibroController
{
    public function agregarLibro() {
        // Crear una instancia del modelo
        $libroModel = new bibliLibro();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener datos del formulario
            $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
            $anio = isset($_POST['anio']) ? $_POST['anio'] : '';
            $subcategoria = isset($_POST['subcategoria']) ? $_POST['subcategoria'] : '';

            // Procesar la imagen
            if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
                $imagenTmpPath = $_FILES['imagen']['tmp_name'];
                $imagenNombre = $_FILES['imagen']['name'];
                $imagenPath = 'uploads/' . basename($imagenNombre);

                // Mover la imagen a la carpeta de destino
                if (move_uploaded_file($imagenTmpPath, $imagenPath)) {
                    // Llamar al método del modelo para agregar el libro
                    $libroModel->AgregarLibro($titulo, $anio, $imagenPath, $subcategoria);
                } else {
                    echo "Error al subir la imagen.";
                }
            } else {
                echo "Error en el archivo de imagen.";
            }
        }

        // Consultar todos los libros después de agregar el nuevo
        $libros = $libroModel->ConsultaLibros();

        // Incluir la vista para mostrar los libros
        include_once('bibliotecaMvc/app/views/content/bibliotecario/admLibros-vista.php');
    }
}
?>
