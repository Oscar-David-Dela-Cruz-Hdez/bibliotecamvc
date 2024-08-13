<?php
// prueba.php

require_once "./config/applicazione.php";
require_once "./autoload.php";

use app\controllers\CategoriaControlador;

// Instancia del controlador
$categoriaControlador = new CategoriaControlador();

// Llamada al método para obtener categorías
$categorias = $categoriaControlador->obtenerCategorias();

// Verifica si se obtuvieron categorías y muestra los resultados
if (!empty($categorias)) {
    echo "<h2>Categorías obtenidas:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID Categoría</th><th>Nombre Categoría</th></tr>";
    foreach ($categorias as $categoria) {
        echo "<tr>";
        echo "<td>" . $categoria['idcategoria'] . "</td>";
        echo "<td>" . $categoria['vchCategoria'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron categorías.";
}
?>
