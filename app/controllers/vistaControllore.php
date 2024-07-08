<?php
    namespace app\controllers;
    use app\models\vistaModello;

    class vistaControllore extends vistaModello{
        
        public function obtenerVistasControlador($vista, $tipoDeUsuario = 'publico'){
            if($vista == "") {
                $respuesta = "principale";
            } else {
                $respuesta = $this->obtenerVistasModelo($vista,$tipoDeUsuario);
            }
            return $respuesta;
        }        
    }
