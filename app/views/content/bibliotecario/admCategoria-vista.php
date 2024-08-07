echo '<link rel="stylesheet" href="' . APP_URL . 'app/views/css/documentazione.css">';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">';

<form action="/bibliotecaMvc/index?clase=controladorCategoria&metodo=mostrarCategorias" method="POST">

echo '<div class="container mt-4">';
echo '<div class="table-responsive">';
echo '<table class="table table-bordered table-hover table-striped text-center">';
echo '<thead class="table-dark">';
echo '<tr>';
echo '<th>ID Categoría</th>';
echo '<th>Categoría</th>';
echo '<th>Acciones</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($categoria = $Consulta->fetch_object()) {
    echo '<form action="/bibliotecaMvc/index?clase=controladorCategoria&metodo=EliminaActualizaCategoria" method="POST">';
    echo '<tr>';
    echo '<td><input type="text" name="txtidcategoria" value="' . $categoria->idcategoria . '" class="form-control" readonly></td>';
    echo '<td><input type="text" name="txtCategoria" value="' . $categoria->vchCategoria . '" class="form-control"></td>';
    echo '<td>';
    echo '<button type="submit" name="btnEliminar" value="btnEliminar" class="btn btn-danger me-2">';
    echo '<i class="fas fa-trash-alt"></i> Eliminar';
    echo '</button>';
    echo '<button type="submit" name="btnActualizar" value="btnActualizar" class="btn btn-primary">';
    echo '<i class="fas fa-edit"></i> Actualizar';
    echo '</button>';
    echo '</td>';
    echo '</tr>';
    echo '</form>';
}

echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</div>';