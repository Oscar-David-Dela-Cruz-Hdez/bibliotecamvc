<?php
namespace app\controllers;

class vistaControllore {
    public function obtenerVistasControlador($vista) {
        // Aquí agregas la lógica para determinar qué vista cargar
        if($vista == "principale") {
            return "principale";
        } else if($vista == "404") {
            return "404";
        } else {
            // Otras vistas específicas
            $filePath = "./app/views/content/public/" . $vista . "-vista.php";
            if(file_exists($filePath)) {
                return $filePath;
            } else {
                return "404";
            }
        }
    }
}
