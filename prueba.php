<?php
// Incluimos el autoload de Composer si es que lo usas, o el archivo de configuración para la conexión
require_once 'app/models/Conexion.php';
require_once 'app/models/admUsuario.php';

// Definimos la constante APP_URL si aún no está definida
if (!defined('APP_URL')) {
    define('APP_URL', 'http://localhost/bibliotecamvc'); // Cambia esto según tu configuración
}

use app\models\admUsuario;

// Crear una instancia del modelo admUsuario
$admUsuarioModel = new admUsuario();

// Inicializar variables para mensajes y resultados
$mensaje = "";
$usuarios = $admUsuarioModel->obtenerUsuarios();

// Manejar inserción de usuario
if (isset($_POST['insertar'])) {
    $resultado = $admUsuarioModel->insertarUsuario($_POST['usuario'], $_POST['nombre'], $_POST['ap'], $_POST['am'], $_POST['correo'], $_POST['contrasena'], $_POST['imgusuario'], $_POST['idrol']);
    $mensaje = $resultado ? "Usuario insertado correctamente." : "Error al insertar usuario.";
    $usuarios = $admUsuarioModel->obtenerUsuarios();
}

// Manejar actualización de usuario
if (isset($_POST['actualizar'])) {
    $resultado = $admUsuarioModel->actualizarUsuario($_POST['idusuario'], $_POST['usuario'], $_POST['nombre'], $_POST['ap'], $_POST['am'], $_POST['correo'], $_POST['contrasena'], $_POST['imgusuario'], $_POST['idrol']);
    $mensaje = $resultado ? "Usuario actualizado correctamente." : "Error al actualizar usuario.";
    $usuarios = $admUsuarioModel->obtenerUsuarios();
}

// Manejar eliminación de usuario
if (isset($_POST['eliminar'])) {
    $resultado = $admUsuarioModel->eliminarUsuario($_POST['idusuario']);
    $mensaje = $resultado ? "Usuario eliminado correctamente." : "Error al eliminar usuario.";
    $usuarios = $admUsuarioModel->obtenerUsuarios();
}

// Mostrar los resultados en un formato legible
echo $mensaje;
if (!empty($usuarios)) {
    echo "<table border='1'>";
    echo "<tr>
            <th>ID Usuario</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Imagen Usuario</th>
            <th>ID Rol</th>
          </tr>";
    foreach ($usuarios as $usuario) {
        // Completar la URL de la imagen
        $imgUrl = APP_URL . '/' . $usuario['imgusuario'];
        echo "<tr>
                <td>{$usuario['idusuario']}</td>
                <td>{$usuario['vchUsuario']}</td>
                <td>{$usuario['vchNombre']}</td>
                <td>{$usuario['vchAp']}</td>
                <td>{$usuario['vchAm']}</td>
                <td>{$usuario['vchCorreo']}</td>
                <td>{$usuario['vchContrasena']}</td>
                <td><img src='$imgUrl' alt='Imagen de usuario' width='50' height='50'></td>
                <td>{$usuario['idrol']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron usuarios.";
}
?>

<!-- Formulario para insertar usuario -->
<h2>Insertar Usuario</h2>
<form method="post">
    <label>Usuario:</label><input type="text" name="usuario" required><br>
    <label>Nombre:</label><input type="text" name="nombre" required><br>
    <label>Apellido Paterno:</label><input type="text" name="ap" required><br>
    <label>Apellido Materno:</label><input type="text" name="am" required><br>
    <label>Correo:</label><input type="email" name="correo" required><br>
    <label>Contraseña:</label><input type="password" name="contrasena" required><br>
    <label>Imagen Usuario:</label><input type="text" name="imgusuario" required><br>
    <label>ID Rol:</label><input type="number" name="idrol" required><br>
    <input type="submit" name="insertar" value="Insertar Usuario">
</form>

<!-- Formulario para actualizar usuario -->
<h2>Actualizar Usuario</h2>
<form method="post">
    <label>ID Usuario:</label><input type="number" name="idusuario" required><br>
    <label>Usuario:</label><input type="text" name="usuario" required><br>
    <label>Nombre:</label><input type="text" name="nombre" required><br>
    <label>Apellido Paterno:</label><input type="text" name="ap" required><br>
    <label>Apellido Materno:</label><input type="text" name="am" required><br>
    <label>Correo:</label><input type="email" name="correo" required><br>
    <label>Contraseña:</label><input type="password" name="contrasena" required><br>
    <label>Imagen Usuario:</label><input type="text" name="imgusuario" required><br>
    <label>ID Rol:</label><input type="number" name="idrol" required><br>
    <input type="submit" name="actualizar" value="Actualizar Usuario">
</form>

<!-- Formulario para eliminar usuario -->
<h2>Eliminar Usuario</h2>
<form method="post">
    <label>ID Usuario:</label><input type="number" name="idusuario" required><br>
    <input type="submit" name="eliminar" value="Eliminar Usuario">
</form>
