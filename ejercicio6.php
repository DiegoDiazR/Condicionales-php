<?php
function mostrarMenu() {
    echo "Menú de opciones:\n";
    echo "1. Calcular área del rectángulo\n";
    echo "2. Calcular área del cuadrado\n";
    echo "3. Calcular área del paralelogramo\n";
    echo "4. Calcular área del rombo\n";
    echo "5. Calcular área del trapecio\n";
    echo "6. Calcular área del triángulo\n";
    echo "7. Calcular área del triángulo equilátero\n";
    echo "8. Calcular área del triángulo rectángulo\n";
    echo "9. Calcular área del polígono regular\n";
    echo "0. Salir\n";
}

function main() {
    do {
        mostrarMenu();

        $opcion = readline("Por favor elige una opción: ");

        switch ($opcion) {
            case '1':
                $base = readline("Ingresa la base del rectángulo: ");
                $altura = readline("Ingresa la altura del rectángulo: ");
                echo "El área del rectángulo es: " . ($base * $altura) . "\n";
                break;
            case '2':
                $lado = readline("Ingresa el lado del cuadrado: ");
                echo "El área del cuadrado es: " . ($lado * $lado) . "\n";
                break;
            case '3':
                $base = readline("Ingresa la base del paralelogramo: ");
                $altura = readline("Ingresa la altura del paralelogramo: ");
                echo "El área del paralelogramo es: " . ($base * $altura) . "\n";
                break;
            case '4':
                $diagonalMayor = readline("Ingresa la diagonal mayor del rombo: ");
                $diagonalMenor = readline("Ingresa la diagonal menor del rombo: ");
                echo "El área del rombo es: " . (($diagonalMayor * $diagonalMenor) / 2) . "\n";
                break;
            case '5':
                $baseMayor = readline("Ingresa la base mayor del trapecio: ");
                $baseMenor = readline("Ingresa la base menor del trapecio: ");
                $altura = readline("Ingresa la altura del trapecio: ");
                echo "El área del trapecio es: " . ((($baseMayor + $baseMenor) * $altura) / 2) . "\n";
                break;
            case '6':
                $base = readline("Ingresa la base del triángulo: ");
                $altura = readline("Ingresa la altura del triángulo: ");
                echo "El área del triángulo es: " . (($base * $altura) / 2) . "\n";
                break;
            case '7':
                $lado = readline("Ingresa el lado del triángulo equilátero: ");
                echo "El área del triángulo equilátero es: " . ((sqrt(3) / 4) * pow($lado, 2)) . "\n";
                break;
            case '8':
                $base = readline("Ingresa la base del triángulo rectángulo: ");
                $altura = readline("Ingresa la altura del triángulo rectángulo: ");
                echo "El área del triángulo rectángulo es: " . (($base * $altura) / 2) . "\n";
                break;
            case '9':
                $perimetro = readline("Ingresa el perímetro del polígono regular: ");
                $apotema = readline("Ingresa el apotema del polígono regular: ");
                echo "El área del polígono regular es: " . (($perimetro * $apotema) / 2) . "\n";
                break;
            case '0':
                echo "Saliendo del programa...\n";
                break;
            default:
                echo "Opción no válida. Por favor elige una opción válida.\n";
                break;
        }
    } while ($opcion !== '0');
}

main();

?>
