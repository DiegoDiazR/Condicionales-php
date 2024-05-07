<?php

$cantidad_articulos = intval(readline("Ingrese la cantidad de artículos: "));
$precio_unitario_original = floatval(readline("Ingrese el precio unitario original: "));

$descuento_5_a_9 = 0.05; 
$descuento_10_o_mas = 0.08; 

$descuento = 0;

if ($cantidad_articulos > 5 && $cantidad_articulos < 10) {
    $descuento = $descuento_5_a_9;
} elseif ($cantidad_articulos >= 10) {
    $descuento = $descuento_10_o_mas;
}

$precio_unitario_con_descuento = $precio_unitario_original - ($precio_unitario_original * $descuento);

$precio_total = $cantidad_articulos * $precio_unitario_con_descuento;

echo "El precio total a pagar es: $precio_total\n";

?>
