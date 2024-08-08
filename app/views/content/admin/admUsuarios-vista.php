<?php
// Incluye el CSS y otros recursos necesarios
?>
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
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Imagen de Usuario</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($usuarios) && !empty($usuarios)): ?>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($usuario['idusuario']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['vchUsuario']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['vchNombre']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['vchAp']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['vchAm']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['vchCorreo']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['vchContrasena']); ?></td>
                        <td>
                            <?php if (!empty($usuario['imgusuario'])): ?>
                                <img src="<?php echo APP_URL . htmlspecialchars($usuario['imgusuario']); ?>" alt="Imagen de usuario" class="img-thumbnail" width="50">
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </td>
                        <td><?php echo htmlspecialchars($usuario['idrol']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="9" class="text-center">No hay usuarios registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
