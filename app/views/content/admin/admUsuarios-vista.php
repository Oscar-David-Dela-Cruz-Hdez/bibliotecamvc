<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/adminusuarios.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
