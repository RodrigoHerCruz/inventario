<?php

function nombreVacio($nombre): bool
{
    if (!is_string($nombre)) {
        return false;
    }

    $nombre = trim($nombre);

    return mb_strlen($nombre) >= 3;
}

function validarCantidadProducto($cantidad): bool
{
    if (!is_int($cantidad) && !is_string($cantidad)) {
        return false;
    }

    $cantidad = trim((string) $cantidad);
    $cantidadEntera = filter_var($cantidad, FILTER_VALIDATE_INT);

    return $cantidadEntera !== false && $cantidadEntera > 0;
}