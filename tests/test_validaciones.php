<?php 
require_once __DIR__ . '/../config/validaciones.php';

$casos = [
    ["Teclado", true],
    ["", false],
    ["      ", false],
    ["Mouse", true]
];

$pruebasAceptadas = 0;
$pruebasRechazadas = 0;

foreach ($casos as [$entrada, $esperado]) {
    $obtenido = nombreVacio($entrada);

    if ($obtenido === $esperado) {
        echo "$entrada: OK\n";
        $pruebasAceptadas++;
    } else {
        echo "$entrada: False\n";
        $pruebasRechazadas++;
    }

}

    echo "Pruebas aceptadas: $pruebasAceptadas\n";
    echo "Pruebas rechazadas: $pruebasRechazadas\n";