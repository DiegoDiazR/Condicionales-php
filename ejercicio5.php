<?php
$nota1 = readline("Por favor ingresa la nota 1 (de 0.0 a 5.0): ");
$nota2 = readline("Por favor ingresa la nota 2 (de 0.0 a 5.0): ");
$nota3 = readline("Por favor ingresa la nota 3 (de 0.0 a 5.0): ");
$nota4 = readline("Por favor ingresa la nota 4 (de 0.0 a 5.0): ");
$nota5 = readline("Por favor ingresa la nota 5 (de 0.0 a 5.0): ");

$nota1 = floatval($nota1);
$nota2 = floatval($nota2);
$nota3 = floatval($nota3);
$nota4 = floatval($nota4);
$nota5 = floatval($nota5);

$promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;

if ($promedio >= 3.0) {
    echo "El estudiante aprobó con un promedio de $promedio.\n";
} else {
    echo "El estudiante no aprobó con un promedio de $promedio.\n";
}
?>
