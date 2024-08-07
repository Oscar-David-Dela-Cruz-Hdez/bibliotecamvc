<?php
namespace app\controllers;

class vistaControllore {
    public function obtenerVistasControlador($vista, $nav) {
        $rutaBase = "./app/views/content/";

        
        switch ($nav) {
            case "nav1":
                $vistaFolder = "public";
                break;
            case "nav2":
                $vistaFolder = "utente";
                break;
            case "nav3":
                $vistaFolder = "bibliotecario"; 
                break;
            case "nav4":
                $vistaFolder = "admin";
                break;
            default:
                $vistaFolder = "bibliotecario";
                break;
        }

        $filePath = $rutaBase . $vistaFolder . "/" . $vista . "-vista.php";

        if (file_exists($filePath)) {
            return $filePath;
        } else {
            return $rutaBase . "public/404-vista.php";
        }
    }
}
