<?php 
require_once __DIR__ . '/../config/validaciones.php';

$casosNombre = [
    ["Teclado", true],
    ["", false],
    ["      ", false],
    ["Mouse", true]
];

$casosCantidad = [
    [2, true],
    [0, false],
    [-1, false],
    ["0", false],
    ["-3", false],
];

$pruebasAceptadas = 0;
$pruebasRechazadas = 0;

foreach ([
    'nombreVacio' => [$casosNombre, 'nombreVacio'],
    'validarCantidadProducto' => [$casosCantidad, 'validarCantidadProducto']
] as $nombreFuncion => [$casos, $funcion]) {
    foreach ($casos as [$entrada, $esperado]) {
        $obtenido = $funcion($entrada);

        if ($obtenido === $esperado) {
            echo "$nombreFuncion(" . var_export($entrada, true) . "): OK\n";
            $pruebasAceptadas++;
        } else {
            echo "$nombreFuncion(" . var_export($entrada, true) . "): FALLÓ; esperado "
                . var_export($esperado, true) . ", obtenido " . var_export($obtenido, true) . "\n";
            $pruebasRechazadas++;
        }
    }
}

echo "Pruebas aceptadas: $pruebasAceptadas\n";
echo "Pruebas rechazadas: $pruebasRechazadas\n";