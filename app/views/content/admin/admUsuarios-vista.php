<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Usuarios</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/admUsuarios.css">
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
                <?php if (isset($usuarios) && !empty($usuarios)): ?>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($usuario['idusuario']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['vchUsuario']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['vchNombre'] . ' ' . $usuario['vchAp'] . ' ' . $usuario['vchAm']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['vchCorreo']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['idrol']); ?></td>
                            <td>
                                <a href="<?php echo APP_URL; ?>admin/editarUsuario.php?id=<?php echo htmlspecialchars($usuario['idusuario']); ?>" class="btn btn-primary btn-sm">Editar</a>
                                <a href="<?php echo APP_URL; ?>admin/eliminarUsuario.php?id=<?php echo htmlspecialchars($usuario['idusuario']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No hay usuarios registrados.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
