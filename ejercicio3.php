<?php
$numero = readline("Por favor ingresa un número: ");
$numero = intval($numero);

if ($numero < 0) {
    echo "El número ingresado es negativo.\n";
} elseif ($numero > 0) {
    echo "El número ingresado es positivo.\n";
} else {
    echo "El número ingresado es cero.\n";
}
?>
