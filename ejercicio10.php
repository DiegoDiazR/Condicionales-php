<?php

$num_llantas = intval(readline("Ingrese el número de llantas compradas: "));

$precio_unidad_1 = 240000; 
$precio_unidad_2 = 221000; 
$precio_unidad_3 = 180000; 

if ($num_llantas < 6) {
    $total_pagar = $num_llantas * $precio_unidad_1;
} elseif ($num_llantas <= 7) {
    $total_pagar = $num_llantas * $precio_unidad_2;
} else {
    $total_pagar = $num_llantas * $precio_unidad_3;
}

echo "El valor a pagar por $num_llantas llantas es: $total_pagar\n";

?>
