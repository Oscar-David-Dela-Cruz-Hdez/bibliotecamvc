<?php
namespace app\controllers;

class vistaControllore {
    public function obtenerVistasControlador($vista, $nav) {
        $rutaBase = "./app/views/content/";

        // io se que ise luego les explico 
        if ($nav == "nav1") {
            $vistaFolder = "public";
        } elseif ($nav == "nav2") {
            $vistaFolder = "utente";
        } elseif ($nav == "nav3") {
            $vistaFolder = "admin";
        } else {
            $vistaFolder = "public";
        }

        $filePath = $rutaBase . $vistaFolder . "/" . $vista . "-vista.php";

        if (file_exists($filePath)) {
            return $filePath;
        } else {
            return $rutaBase . "public/404-vista.php";
        }
    }
}
