<?php

do {
    echo "Menú de opciones:\n";
    echo "1. Convertir de Celsius a Fahrenheit\n";
    echo "2. Convertir de Celsius a Kelvin\n";
    echo "3. Convertir de Celsius a Rankine\n";
    echo "4. Convertir de Celsius a Réaumur\n";
    echo "5. Convertir de Fahrenheit a Celsius\n";
    echo "6. Convertir de Fahrenheit a Kelvin\n";
    echo "7. Convertir de Fahrenheit a Rankine\n";
    echo "8. Convertir de Fahrenheit a Réaumur\n";
    echo "9. Convertir de Kelvin a Celsius\n";
    echo "10. Convertir de Kelvin a Fahrenheit\n";
    echo "11. Convertir de Kelvin a Rankine\n";
    echo "12. Convertir de Kelvin a Réaumur\n";
    echo "13. Convertir de Rankine a Celsius\n";
    echo "14. Convertir de Rankine a Fahrenheit\n";
    echo "15. Convertir de Rankine a Kelvin\n";
    echo "16. Convertir de Rankine a Réaumur\n";
    echo "17. Convertir de Réaumur a Celsius\n";
    echo "18. Convertir de Réaumur a Fahrenheit\n";
    echo "19. Convertir de Réaumur a Kelvin\n";
    echo "20. Convertir de Réaumur a Rankine\n";
    echo "0. Salir\n";

    $opcion = readline("Por favor elige una opción: ");

    switch ($opcion) {
        case '1':
            $celsius = readline("Ingresa la temperatura en grados Celsius: ");
            echo "La temperatura en Fahrenheit es: " . (($celsius * 9/5) + 32) . " °F\n";
            break;
        case '2':
            $celsius = readline("Ingresa la temperatura en grados Celsius: ");
            echo "La temperatura en Kelvin es: " . ($celsius + 273.15) . " K\n";
            break;
        case '3':
            $celsius = readline("Ingresa la temperatura en grados Celsius: ");
            echo "La temperatura en Rankine es: " . (($celsius + 273.15) * 9/5) . " °R\n";
            break;
        case '4':
            $celsius = readline("Ingresa la temperatura en grados Celsius: ");
            echo "La temperatura en Réaumur es: " . ($celsius * 4/5) . " °Ré\n";
            break;
        case '5':
            $fahrenheit = readline("Ingresa la temperatura en grados Fahrenheit: ");
            echo "La temperatura en Celsius es: " . (($fahrenheit - 32) * 5/9) . " °C\n";
            break;
        case '6':
            $fahrenheit = readline("Ingresa la temperatura en grados Fahrenheit: ");
            echo "La temperatura en Kelvin es: " . (($fahrenheit + 459.67) * 5/9) . " K\n";
            break;
        case '7':
            $fahrenheit = readline("Ingresa la temperatura en grados Fahrenheit: ");
            echo "La temperatura en Rankine es: " . ($fahrenheit + 459.67) . " °R\n";
            break;
        case '8':
            $fahrenheit = readline("Ingresa la temperatura en grados Fahrenheit: ");
            echo "La temperatura en Réaumur es: " . (($fahrenheit - 32) * 4/9) . " °Ré\n";
            break;
        case '9':
            $kelvin = readline("Ingresa la temperatura en grados Kelvin: ");
            echo "La temperatura en Celsius es: " . ($kelvin - 273.15) . " °C\n";
            break;
        case '10':
            $kelvin = readline("Ingresa la temperatura en grados Kelvin: ");
            echo "La temperatura en Fahrenheit es: " . (($kelvin * 9/5) - 459.67) . " °F\n";
            break;
        case '11':
            $kelvin = readline("Ingresa la temperatura en grados Kelvin: ");
            echo "La temperatura en Rankine es: " . ($kelvin * 9/5) . " °R\n";
            break;
        case '12':
            $kelvin = readline("Ingresa la temperatura en grados Kelvin: ");
            echo "La temperatura en Réaumur es: " . (($kelvin - 273.15) * 4/5) . " °Ré\n";
            break;
        case '13':
            $rankine = readline("Ingresa la temperatura en grados Rankine: ");
            echo "La temperatura en Celsius es: " . (($rankine - 491.67) * 5/9) . " °C\n";
            break;
        case '14':
            $rankine = readline("Ingresa la temperatura en grados Rankine: ");
            echo "La temperatura en Fahrenheit es: " . ($rankine - 459.67) . " °F\n";
            break;
        case '15':
            $rankine = readline("Ingresa la temperatura en grados Rankine: ");
            echo "La temperatura en Kelvin es: " . ($rankine * 5/9) . " K\n";
            break;
        case '16':
            $rankine = readline("Ingresa la temperatura en grados Rankine: ");
            echo "La temperatura en Réaumur es: " . (($rankine - 491.67) * 4/9) . " °Ré\n";
            break;
        case '17':
            $reaumur = readline("Ingresa la temperatura en grados Réaumur: ");
            echo "La temperatura en Celsius es: " . ($reaumur * 5/4) . " °C\n";
            break;
        case '18':
            $reaumur = readline("Ingresa la temperatura en grados Réaumur: ");
            echo "La temperatura en Fahrenheit es: " . (($reaumur * 9/4) + 32) . " °F\n";
            break;
        case '19':
            $reaumur = readline("Ingresa la temperatura en grados Réaumur: ");
            echo "La temperatura en Kelvin es: " . (($reaumur * 5/4) + 273.15) . " K\n";
            break;
        case '20':
            $reaumur = readline("Ingresa la temperatura en grados Réaumur: ");
            echo "La temperatura en Rankine es: " . (($reaumur * 9/4) + 491.67) . " °R\n";
            break;
        case '0':
            echo "Saliendo del programa...\n";
            break;
        default:
            echo "Opción no válida. Por favor elige una opción válida.\n";
            break;
    }
} while ($opcion !== '0');

?>
