<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrar Autores</title>
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
                            <h2 class="text-center">Insertar Autor</h2>
                            <form id="autorForm" method="POST" action="">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nombre" class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del autor" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="ap" class="form-label">Apellido Paterno:</label>
                                        <input type="text" class="form-control" id="ap" name="ap" placeholder="Ingrese el apellido paterno" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="am" class="form-label">Apellido Materno:</label>
                                        <input type="text" class="form-control" id="am" name="am" placeholder="Ingrese el apellido materno" required>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="btnAgregar" class="btn btn-primary w-100">Agregar Autor</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-body">
                            <h2 class="text-center">Autores Registrados</h2>
                            <div class="table-container">
                                <table class="centered-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($Consulta)) {
                                            foreach ($Consulta as $autor) {
                                                echo '<form class="form" action="" method="POST">';
                                                echo '<tr>';
                                                echo '<td><input type="text" name="idAutor" value="' . $autor['idAutor'] . '" readonly></td>';
                                                echo '<td><input type="text" name="nombre" value="' . $autor['nombre'] . '"></td>';
                                                echo '<td><input type="text" name="ap" value="' . $autor['ap'] . '"></td>';
                                                echo '<td><input type="text" name="am" value="' . $autor['am'] . '"></td>';
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
