<?php

require_once __DIR__ . '/config/validaciones.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$nombre = trim($_POST['nombre'] ?? '');
$cantidad = $_POST['cantidad'] ?? '';

if (!nombreVacio($nombre)) {
    header('Location: index.php?estado=nombre_invalido');
    exit;
}

if (!validarCantidadProducto($cantidad)) {
    header('Location: index.php?estado=cantidad_invalida');
    exit;
}

require_once __DIR__ . '/config/conexion.php';

$sentencia = $conexion->prepare(
    'INSERT INTO productos (nombre, cantidad)
     VALUES (:nombre, :cantidad)'
);

$sentencia->execute([
    'nombre' => $nombre,
    'cantidad' => (int) $cantidad
]);

header('Location: index.php?estado=guardado');
exit;