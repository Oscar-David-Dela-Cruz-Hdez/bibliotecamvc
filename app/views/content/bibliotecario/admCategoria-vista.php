<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/documentazione.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="container mt-4">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID Categoría</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($Consulta) && !empty($Consulta)) { ?>
                    <?php foreach ($Consulta as $categoria) { ?>
                        <form action="/bibliotecaMvc/index?clase=controladorCategoria&metodo=EliminaActualizaCategoria" method="POST">
                            <tr>
                                <td>
                                    <input type="text" name="txtidcategoria" value="<?php echo $categoria['idcategoria']; ?>" class="form-control" readonly>
                                </td>
                                <td>
                                    <input type="text" name="txtCategoria" value="<?php echo $categoria['vchCategoria']; ?>" class="form-control">
                                </td>
                                <td>
                                    <button type="submit" name="btnEliminar" value="btnEliminar" class="btn btn-danger me-2">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </button>
                                    <button type="submit" name="btnActualizar" value="btnActualizar" class="btn btn-primary">
                                        <i class="fas fa-edit"></i> Actualizar
                                    </button>
                                </td>
                            </tr>
                        </form>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="3">No hay datos disponibles</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

