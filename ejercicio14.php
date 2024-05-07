<?php

$edad = intval(readline("Ingrese su edad: "));
$genero = intval(readline("Ingrese su género (1 para femenino, 2 para masculino): "));

if ($genero === 1) {
    $pulsaciones = (220 - $edad) / 10;
} elseif ($genero === 2) {
    $pulsaciones = (210 - $edad) / 10;
} else {
    echo "Género no válido. Debe ser 1 para femenino o 2 para masculino.\n";
    exit();
}

echo "El número de pulsaciones es: $pulsaciones\n";

?>
