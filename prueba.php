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

// Función para mostrar los usuarios
function mostrarUsuarios($usuarios) {
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
}

// Probar la función obtenerUsuarios()
echo "<h2>Obtener Usuarios</h2>";
$usuarios = $admUsuarioModel->obtenerUsuarios();
mostrarUsuarios($usuarios);

// Probar la función insertarUsuario()
echo "<h2>Insertar Usuario</h2>";
$nuevoUsuario = [
    'usuario' => 'nuevoUsuario',
    'nombre' => 'Nombre',
    'ap' => 'ApellidoP',
    'am' => 'ApellidoM',
    'correo' => 'correo@example.com',
    'contrasena' => hash('sha512', 'password123'),
    'imgusuario' => 'app/views/img/user.png',
    'idrol' => 1
];
$insertado = $admUsuarioModel->insertarUsuario(
    $nuevoUsuario['usuario'], 
    $nuevoUsuario['nombre'], 
    $nuevoUsuario['ap'], 
    $nuevoUsuario['am'], 
    $nuevoUsuario['correo'], 
    $nuevoUsuario['contrasena'], 
    $nuevoUsuario['imgusuario'], 
    $nuevoUsuario['idrol']
);
if ($insertado) {
    echo "Usuario insertado correctamente.<br>";
} else {
    echo "Error al insertar usuario.<br>";
}

// Probar la función actualizarUsuario()
echo "<h2>Actualizar Usuario</h2>";
$usuarioActualizado = [
    'idusuario' => 1, // Cambia este ID a uno existente en tu base de datos
    'usuario' => 'usuarioActualizado',
    'nombre' => 'NombreActualizado',
    'ap' => 'ApellidoPActualizado',
    'am' => 'ApellidoMActualizado',
    'correo' => 'correoactualizado@example.com',
    'contrasena' => hash('sha512', 'newpassword123'),
    'imgusuario' => 'app/views/img/user.png',
    'idrol' => 2
];
$actualizado = $admUsuarioModel->actualizarUsuario(
    $usuarioActualizado['idusuario'],
    $usuarioActualizado['usuario'],
    $usuarioActualizado['nombre'],
    $usuarioActualizado['ap'],
    $usuarioActualizado['am'],
    $usuarioActualizado['correo'],
    $usuarioActualizado['contrasena'],
    $usuarioActualizado['imgusuario'],
    $usuarioActualizado['idrol']
);
if ($actualizado) {
    echo "Usuario actualizado correctamente.<br>";
} else {
    echo "Error al actualizar usuario.<br>";
}

// Probar la función eliminarUsuario()
echo "<h2>Eliminar Usuario</h2>";
$idUsuarioEliminar = 1; // Cambia este ID a uno existente en tu base de datos para probar
$eliminado = $admUsuarioModel->eliminarUsuario($idUsuarioEliminar);
if ($eliminado) {
    echo "Usuario eliminado correctamente.<br>";
} else {
    echo "Error al eliminar usuario.<br>";
}

// Mostrar los usuarios después de las operaciones
echo "<h2>Usuarios Después de Operaciones</h2>";
$usuarios = $admUsuarioModel->obtenerUsuarios();
mostrarUsuarios($usuarios);
?>
