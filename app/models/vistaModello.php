<?php
	namespace app\models;

	class vistaModello{

		protected function obtenerVistasModelo($vista, $tipoDeUsuario = 'publico'){

			$listaBlanca=["iniziaSessione","documentazione","libri","regolamento","profilo","utentePrincipale","bibliLibro","bibliAutor","bibliCategoria","bibliSubcategoria","bibliPrincipale"];
			$rutaUsuario = "./app/views/content/";

			if ($tipoDeUsuario == 'admin') {
				$rutaUsuario .= "admin/";
			} elseif ($tipoDeUsuario == 'bibliotecario') {
				$rutaUsuario .= "bibliotecario/";
			}	elseif ($tipoDeUsuario == 'utente') {
				$rutaUsuario .= "utente/";
			}  else {
				$rutaUsuario .= "public/";
			}

			if (in_array($vista, $listaBlanca)) {
				if (is_file($rutaUsuario . $vista . "-vista.php")) {
					$contenido = $rutaUsuario . $vista . "-vista.php";
				} else {
					$contenido = "404";
				}
			} elseif ($vista == "principale" || $vista == "index") {
				$contenido = "principale";
			} else {
				$contenido = "404";
			}
			return $contenido;
		}

	}
