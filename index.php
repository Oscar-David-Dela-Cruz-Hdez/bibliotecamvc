<?php

    require_once "./config/applicazione.php";
    require_once "./autoload.php";

    /*---------- Iniciando sesion ----------*/
    require_once "./app/views/inc/inizia_sessione.php";

// esta madre es experimental, aun no funciona al 100/o tal vez no funciona. solo es algo de prueba
//para verificar el tipo de usuario que entrara de acuerdo al rol establecido, esto ya es con la conexion a base de datos xD


    $tipoDeUsuario = 'publico'; // Por defecto, es lo que puse en el controlador y modelo de vista
    if (isset($_SESSION['rol'])) {
        if ($_SESSION['rol'] == 'admin') {
            $tipoDeUsuario = 'admin';
        } elseif ($_SESSION['rol'] == 'usuario') {
            $tipoDeUsuario = 'usuario';
        }
    }

    if(isset($_GET['views'])){
        $url=explode("/", $_GET['views']);
    }else{
        $url=["principale"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "./app/views/inc/testa.php"; ?>
</head>
<body style="background: url('<?php echo APP_URL; ?>app/views/img/659155.jpg') no-repeat center / cover;">
    <?php
        use app\controllers\vistaControllore;


        $vistaControllore = new vistaControllore();
        $vista=$vistaControllore->obtenerVistasControlador($url[0], $tipoDeUsuario);

        if($vista=="principale" || $vista=="404"){
            require_once "./app/views/content/public/".$vista."-vista.php";
        }else{
            /*inutilizado por el momento cfcff # Cerrar sesion #
            if((!isset($_SESSION['id']) || $_SESSION['id']=="") || (!isset($_SESSION['usuario']) || $_SESSION['usuario']=="")){
                $insLogin->cerrarSesionControlador();
                exit();
            }*/

            require_once $vista;
        }

        require_once "./app/views/inc/script.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>