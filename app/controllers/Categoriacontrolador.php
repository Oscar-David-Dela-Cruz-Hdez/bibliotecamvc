<?php
namespace app\controllers;

use app\models\CategoriaModelo;

class CategoriaControlador {

    public function agregarCategoria() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtener datos del formulario
            $idCategoria = $_POST['idcategoria'];
            $nombreCategoria = $_POST['nombre'];

            // Instanciar el modelo
            $categoriaModelo = new CategoriaModelo();

            // Llamar al método para agregar la categoría
            $resultado = $categoriaModelo->agregarCategoria($idCategoria, $nombreCategoria);

            // Manejo del resultado
            if ($resultado) {
                // Redirigir a la vista de categorías después de agregar
                header('Location: ' . APP_URL . 'bibliCategoria');
                exit();
            } else {
                echo "Error al agregar la categoría";
            }
        }
    }

    public function obtenerCategorias() {
        $categoriaModelo = new CategoriaModelo();
        return $categoriaModelo->consultarCategorias();
    }

    public function eliminarCategoria() {
        if (isset($_POST['idcategoria'])) {
            $idCategoria = intval($_POST['idcategoria']);
            
            $categoriaModelo = new CategoriaModelo();
            $resultado = $categoriaModelo->eliminarCategoria($idCategoria);
            
            if ($resultado) {
                header('Location: ' . APP_URL . 'bibliCategoria');
                exit();
            } else {
                echo "Error al eliminar la categoría";
            }
        } else {
            echo "ID de categoría no especificado";
        }
    }
    

    public function actualizarCategoria() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $idCategoria = $_POST['idcategoria'];
            $nombreCategoria = $_POST['nombre'];

            $categoriaModelo = new CategoriaModelo();
            $resultado = $categoriaModelo->actualizarCategoria($idCategoria, $nombreCategoria);

            if ($resultado) {
                header('Location: ' . APP_URL . 'bibliCategoria');
                exit();
            } else {
                echo "Error al actualizar la categoría";
            }
        }
    }
    



}
