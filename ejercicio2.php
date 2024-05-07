<?php
$nombre = readline("Por favor ingresa tu nombre: ");
$edad = intval(readline("Por favor ingresa tu edad: "));

if ($edad < 0 || $edad > 100) {
    echo "Por favor ingresa una edad válida.\n";
} else {
    if ($edad >= 18) {
        echo "Hola, $nombre. Usted es mayor de edad.\n";
    } else {
        echo "Hola, $nombre. Usted es menor de edad.\n";
    }
}
?>
