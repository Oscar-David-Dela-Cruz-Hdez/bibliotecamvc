<?php

namespace app\controllers;

require_once 'app/models/Usuario.php';
require_once 'app/models/vistaModello.php';

class sessioneControllore {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            $usuarioModel = new \app\models\Usuario();
            $result = $usuarioModel->login($correo);

            if ($result) {
                $storedHash = $result['vchContrasena'];
                $providedHash = hash('sha512', $contrasena);

                // Verificación del hash
                if ($providedHash === $storedHash) {
                    $_SESSION['usuario'] = $result['vchUsuario'];
                    $_SESSION['rol'] = $result['idrol'];

                    switch ($result['idrol']) {
                        case 1:
                            header('Location: ' . APP_URL . 'app/views/utente/utentePrincipale-vista.php');
                            break;
                        case 2:
                            header('Location: ' . APP_URL . 'app/views/bibliotecario/bibliGestion-vista.php');
                            break;
                        case 3:
                            header('Location: ' . APP_URL . 'app/views/admin/admPrincipale-vista.php');
                            break;
                        default:
                            header('Location: ' . APP_URL . 'app/views/public/principale-vista.php');
                    }
                    exit();
                } else {
                    $_SESSION['login_error'] = 'Credenciales incorrectas';
                    header('Location: ' . APP_URL . 'app/views/public/iniziaSessione-vista.php');
                    exit();
                }
            } else {
                $_SESSION['login_error'] = 'Correo electrónico no encontrado';
                header('Location: ' . APP_URL . 'app/views/public/iniziaSessione-vista.php');
                exit();
            }
        }
    }
}
