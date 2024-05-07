<?php

$numero1 = readline("Ingrese el primer número: ");
$numero2 = readline("Ingrese el segundo número: ");
$numero3 = readline("Ingrese el tercer número: ");

$numero1 = intval($numero1);
$numero2 = intval($numero2);
$numero3 = intval($numero3);

$numeros = [$numero1, $numero2, $numero3];

// Ordenar los números en orden ascendente manualmente
for ($i = 0; $i < count($numeros) - 1; $i++) {
    for ($j = $i + 1; $j < count($numeros); $j++) {
        if ($numeros[$i] > $numeros[$j]) {
            // Intercambiar los números si están en el orden incorrecto
            $temp = $numeros[$i];
            $numeros[$i] = $numeros[$j];
            $numeros[$j] = $temp;
        }
    }
}

echo "Números en orden ascendente: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
echo "\n";

// Ordenar los números en orden descendente manualmente
for ($i = 0; $i < count($numeros) - 1; $i++) {
    for ($j = $i + 1; $j < count($numeros); $j++) {
        if ($numeros[$i] < $numeros[$j]) {
            // Intercambiar los números si están en el orden incorrecto
            $temp = $numeros[$i];
            $numeros[$i] = $numeros[$j];
            $numeros[$j] = $temp;
        }
    }
}

echo "Números en orden descendente: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
echo "\n";

?>
