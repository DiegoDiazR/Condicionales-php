<?php

$cuenta = floatval(readline("Ingrese el monto de la cuenta: "));

$limite_efectivo = 150000;
$limite_celular = 300000;
$limite_debito = 600000;

if ($cuenta < $limite_efectivo) {
    echo "El monto es menor a $150000, el pago se realizará en efectivo.\n";
} elseif ($cuenta <= $limite_celular) {
    echo "El monto es entre $150000 y $300000, el pago se realizará con el celular (dinero electrónico).\n";
} elseif ($cuenta <= $limite_debito) {
    echo "El monto es entre $300000 y $600000, el pago se realizará con tarjeta de débito.\n";
} else {
    echo "El monto es mayor a $600000, el pago se realizará con tarjeta de crédito.\n";
}

?>
