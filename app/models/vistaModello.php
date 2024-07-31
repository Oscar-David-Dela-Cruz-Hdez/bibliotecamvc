<?php
namespace app\models;

class vistaModello {

    public function obtenerVistasModelo($vista) {
        // Lista de vistas válidas en la aplicación
        $listaBlanca = ["iniziaSessione", "documentazione", "libri", "regolamento", "profilo", "utentePrincipale", "utenteLibri", "utenteRegolamento", "principale"];
        $rutaBase = "./app/views/content/";

        if (in_array($vista, $listaBlanca)) {
            if (is_file($rutaBase . $vista . "-vista.php")) {
                $contenido = $rutaBase . $vista . "-vista.php";
            } else {
                $contenido = $rutaBase . "404-vista.php";
            }
        } else {
            $contenido = $rutaBase . "404-vista.php";
        }
        return $contenido;
    }
}
