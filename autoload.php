<?php

spl_autoload_register(function($clase){
    $archivo = __DIR__ . '/' . str_replace("\\", "/", $clase) . '.php';

    if (is_file($archivo)) {
        require_once $archivo;
    }
});
