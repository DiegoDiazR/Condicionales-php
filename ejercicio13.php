<?php
//variables
$peso = floatval(readline("Ingrese su peso en Kg: "));
$estatura = floatval(readline("Ingrese su estatura en metros: "));

$imc = $peso / ($estatura * $estatura);
//operadores logicos
if ($imc < 18.5) {
    $estado = "Desnutrido";
} elseif ($imc >= 18.5 and $imc < 25) {
    $estado = "Normal";
} elseif ($imc >= 25 and $imc < 30) {
    $estado = "Sobrepeso";
} elseif ($imc >= 30 and $imc < 35) {
    $estado = "Obesidad Grado 1";
} elseif ($imc >= 35 and $imc < 40) {
    $estado = "Obesidad Grado 2";
} elseif ($imc >= 40 and $imc < 50) {
    $estado = "Obesidad Grado 3";
} else {
    $estado = "Obesidad Grado 4";
}
//resultado
echo "Su IMC es: $imc\n";
echo "Su estado es: $estado\n";

?>
