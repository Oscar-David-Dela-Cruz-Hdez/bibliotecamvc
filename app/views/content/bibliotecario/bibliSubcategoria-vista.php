<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrar Subcategorías</title>
    <link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/documentazione.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="d-flex flex-column min-vh-100">
    <main class="flex-fill">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center">Insertar Subcategoría</h2>
                            <form id="subcategoriaForm" method="POST" action="">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nombre" class="form-label">Subcategoría:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese la subcategoría a agregar" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="idcategoria" class="form-label">Categoría:</label>
                                        <select class="form-control" id="idcategoria" name="idcategoria" required>
                                            <!-- Aquí debes agregar las opciones de categorías desde tu base de datos -->
                                            <?php foreach ($categorias as $categoria): ?>
                                                <option value="<?php echo $categoria['idcategoria']; ?>"><?php echo $categoria['vchCategoria']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">Agregar Subcategoría</button>
                                    </div>
                                </div>
                            </form>
                            <h2 class="text-center mt-4">Subcategorías Registradas</h2>
                            <div class="table-container mt-3">
                                <table class="centered-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Subcategoría</th>
                                            <th>Categoría</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($subcategorias)) {
                                            foreach ($subcategorias as $subcategoria) {
                                                echo '<form class="form" action="" method="POST">';
                                                echo '<tr>';
                                                echo '<td><input type="text" name="idsubcategoria" value="' . $subcategoria['idsubcategoria'] . '" readonly></td>';
                                                echo '<td><input type="text" name="subcategoria" value="' . $subcategoria['vchSubcategoria'] . '"></td>';
                                                echo '<td><input type="text" name="idcategoria" value="' . $subcategoria['idcategoria'] . '"></td>';
                                                echo '<td width=250>';
                                                echo '<button type="submit" name="btnEliminar" class="btn btn-danger">Eliminar</button>';
                                                echo '&nbsp;';
                                                echo '<button type="submit" name="btnActualizar" class="btn btn-success">Actualizar</button>';
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
