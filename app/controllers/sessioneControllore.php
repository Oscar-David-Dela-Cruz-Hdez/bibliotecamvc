<?php
    namespace app\controllers;
    use app\models\menuModello;

    class loginController extends menuModello{
        
        /*----------  Controlador cerrar sesion  ----------*/
		public function cerrarSesionControlador(){

			session_destroy();

		    if(headers_sent()){
                echo "<script> window.location.href='".APP_URL."login/'; </script>";
            }else{
                header("Location: ".APP_URL."login/");
            }
		}
    }
?>