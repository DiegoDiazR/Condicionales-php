<?php

$tamaño_pizza = intval(readline("Ingrese el tamaño de la pizza (1, 2 o 3): "));
$num_ingredientes = intval(readline("Ingrese el número de ingredientes adicionales: "));

$precios_base = [
    1 => 15000,
    2 => 24000,
    3 => 36000
];

$precio_ingrediente = 4000;

if ($tamaño_pizza == 1) {
    $precio_pizza = 15000;
} elseif ($tamaño_pizza == 2) {
    $precio_pizza = 24000;
} elseif ($tamaño_pizza == 3) {
    $precio_pizza = 36000;
} else {
    echo "Tamaño de pizza no válido. Debe ser 1, 2 o 3.\n";
    exit();
}

$precio_total = $precio_pizza + ($num_ingredientes * $precio_ingrediente);

echo "El precio a pagar es: $precio_total\n";

?>
