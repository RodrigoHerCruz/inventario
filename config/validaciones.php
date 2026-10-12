<?php

function nombreVacio($nombre) 
{
    // $nombre = trim($nombre);

    if ($nombre === ''){
        return false;
    }

    if (mb_strlen($nombre) >= 3) {
        return true;
    }

    return true;
}

function validarCantidadProducto($cantidad)
{
    if ($cantidad <= 0) {
        return false;
    }

    return true;
}