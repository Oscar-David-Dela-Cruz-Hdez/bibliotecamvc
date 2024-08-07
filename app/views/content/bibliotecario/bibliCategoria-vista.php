<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrar Categorías</title>
    <link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/documentazione.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="d-flex flex-column min-vh-100">
        <main class="flex-fill">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="text-center">Insertar Categoría</h2>
                                <form id="categoriaForm" method="POST" action="">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="nombre" class="form-label">Categoría:</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese la categoría a agregar" required>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="btnAgregar" class="btn btn-primary w-100">Agregar Categoría</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center">Administrar Categorías</h2>
                                <div class="table-container">
                                    <table class="centered-table">
                                        <thead>
                                            <tr>
                                                <th>ID Categoría</th>
                                                <th>Nombre</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (isset($Consulta)) {
                                                foreach ($Consulta as $categoria) {
                                                    echo '<form class="form" action="/bibliotecaMvc/index?clase=controladorCategoria&metodo=EliminaActualizaCategoria" method="POST">';
                                                    echo '<tr>';
                                                    echo '<td> <input type="text" name="txtidcategoria" value="' . $categoria['idcategoria'] . '" readonly> </td>';
                                                    echo '<td> <input type="text" name="txtCategoria" value="' . $categoria['vchCategoria'] . '"> </td>';
                                                    echo '<td width=250>';
                                                    echo '<button type="submit" name="btnEliminar" value="btnEliminar" class="submit-button btn btn-danger">Eliminar</button>';
                                                    echo '&nbsp;';
                                                    echo '<button type="submit" name="btnActualizar" value="btnActualizar" class="submit-button btn btn-warning">Actualizar</button>';
                                                    echo '</td>';
                                                    echo '</tr>';
                                                    echo '</form>';
                                                }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </main>
    </div>
</body>
</html>
