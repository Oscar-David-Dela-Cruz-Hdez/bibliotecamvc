<?php
nome_sessione(APP_NOME_SESSIONE);
inizia_sessione();

// Definición de funciones
function nome_sessione($nombre) {
    session_name($nombre);
}

function inizia_sessione() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
}