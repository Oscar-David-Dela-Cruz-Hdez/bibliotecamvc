<?php
class LoginController {
    public function iniciarSesion() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            
            // Aquí se llama al modelo LoginUsuario para verificar las credenciales
            $loginUsuario = new LoginUsuario();
            $usuario = $loginUsuario->obtenerUsuarioPorCorreo($correo);
            
            if ($usuario) {
                // Verificar la contraseña
                if (password_verify($contrasena, $usuario['vchContrasena'])) {
                    // Inicio de sesión exitoso, guardar información del usuario en sesión
                    $_SESSION['idusuario'] = $usuario['idusuario'];
                    $_SESSION['idrol'] = $usuario['idrol'];
                    $_SESSION['nombre'] = $usuario['vchNombre'];
                    
                    // Redirigir según el rol del usuario
                    if ($usuario['idrol'] == 1) {
                        header('Location: ' . APP_URL . 'utente/principale');
                    } elseif ($usuario['idrol'] == 2) {
                        header('Location: ' . APP_URL . 'bibliotecario/principale');
                    } elseif ($usuario['idrol'] == 3) {
                        header('Location: ' . APP_URL . 'admin/principale');
                    }
                    exit;
                } else {
                    // Contraseña incorrecta
                    $mensaje = "Contraseña incorrecta.";
                }
            } else {
                // Usuario no encontrado
                $mensaje = "Correo no encontrado.";
            }
        }
        
        // Renderizar la vista con el mensaje de error si existe
        require_once 'app/views/public/iniziaSessione-vista.php';
    }
}

?>
