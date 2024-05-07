<?php
$numero1 = readline("Por favor ingresa el primer número: ");
$numero2 = readline("Por favor ingresa el segundo número: ");

$numero1 = intval($numero1);
$numero2 = intval($numero2);

if ($numero1 > $numero2) {
    $mayor = $numero1;
    $menor = $numero2;
} elseif ($numero2 > $numero1) {
    $mayor = $numero2;
    $menor = $numero1;
} else {
    echo "Los dos números son iguales.\n";
    exit();
}

echo "El número mayor es: $mayor\n";
echo "El número menor es: $menor\n";
?>
