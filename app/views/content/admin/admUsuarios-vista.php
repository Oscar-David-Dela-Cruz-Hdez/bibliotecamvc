<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Usuarios</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/adminusuarios.css">
</head>
<body>

    <!-- Main Content -->
    <div class="container mt-5">
        <h1 class="mb-4">Administrar Usuarios</h1>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario['idusuario']; ?></td>
                        <td><?php echo $usuario['vchUsuario']; ?></td>
                        <td><?php echo $usuario['vchNombre'] . ' ' . $usuario['vchAp'] . ' ' . $usuario['vchAm']; ?></td>
                        <td><?php echo $usuario['vchCorreo']; ?></td>
                        <td><?php echo $usuario['idrol']; ?></td>
                        <td>
                            <a href="editarUsuario.php?id=<?php echo $usuario['idusuario']; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="eliminarUsuario.php?id=<?php echo $usuario['idusuario']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
