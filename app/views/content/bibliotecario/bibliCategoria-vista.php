<div class="d-flex flex-column min-vh-100">
    <main class="flex-fill">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Formulario para insertar categorías -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="text-center">Insertar Categoría</h2>
                            <form id="categoriaForm" method="POST" action="/bibliotecaMvc/index?clase=CategoriaControlador&metodo=agregarCategoria">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="idcategoria" class="form-label">ID Categoría:</label>
                                        <input type="text" class="form-control" id="idcategoria" name="idcategoria" placeholder="Ingrese el ID de la categoría" required>
                                    </div>
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

                    <!-- Tabla para mostrar y administrar categorías -->
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
                                        <?php if (isset($Consulta) && !empty($Consulta)) {
                                            foreach ($Consulta as $categoria) {
                                                echo '<tr>';
                                                echo '<td>' . htmlspecialchars($categoria['idcategoria']) . '</td>';
                                                echo '<td>' . htmlspecialchars($categoria['vchCategoria']) . '</td>';
                                                echo '<td width="250">';
                                                echo '<form action="/bibliotecaMvc/index?clase=CategoriaControlador&metodo=eliminarCategoria" method="POST" style="display:inline;">';
                                                echo '<input type="hidden" name="idcategoria" value="' . htmlspecialchars($categoria['idcategoria']) . '">';
                                                echo '<button type="submit" name="btnEliminar" class="btn btn-danger">Eliminar</button>';
                                                echo '</form>';
                                                echo '&nbsp;';
                                                echo '<form action="/bibliotecaMvc/index?clase=CategoriaControlador&metodo=actualizarCategoria" method="POST" style="display:inline;">';
                                                echo '<input type="hidden" name="idcategoria" value="' . htmlspecialchars($categoria['idcategoria']) . '">';
                                                echo '<button type="submit" name="btnActualizar" class="btn btn-warning">Actualizar</button>';
                                                echo '</form>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                        } else {
                                            echo '<tr><td colspan="3" class="text-center">No hay categorías disponibles.</td></tr>';
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
