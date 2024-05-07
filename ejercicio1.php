<?php
$numero = readline("Por favor ingresa un número: ");

if ($numero == 0) {
    echo "El número ingresado es cero.";
} else {
    if ($numero % 2 == 0) {
        echo "El número ingresado es par.";
    } else {
        echo "El número ingresado es impar.";
    }
}
?>
