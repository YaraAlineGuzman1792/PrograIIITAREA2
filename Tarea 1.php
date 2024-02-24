<?php

// Función para generar la tabla de multiplicar de un número dado
function tablaMultiplicar($numero) {
    echo "Tabla de multiplicar del $numero: ";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . " ";
    }
    // No hay salto de línea al final
}

// Función para calcular el factorial de un número dado
function factorial($numero) {
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }
    echo "El factorial de $numero es: $factorial ";
}

// Función para verificar si un número dado es primo
function esPrimo($numero) {
    if ($numero <= 1) {
        echo "El número $numero no es primo. ";
        return;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            echo "El número $numero no es primo. ";
            return;
        }
    }
    echo "El número $numero es primo. ";
}

// Función para verificar si un número dado es par
function esPar($numero) {
    if ($numero % 2 == 0) {
        echo "El número $numero es par. ";
    } else {
        echo "El número $numero no es par. ";
    }
}

// Variables seteadas para cada ejercicio
$variable1 = 5;
$variable2 = 17;
$variable3 = 8;
$variable4 = 7;

function main()
{
    $x=1;
    do {
        echo "Menú de ejercicios: ". "\n";
        echo "1. Generar tabla de multiplicar del 4 ". "\n";
        echo "2. Generar tabla de multiplicar del 6 ". "\n";
        echo "3. Calcular factorial de $GLOBALS[variable1] ". "\n";
        echo "4. Verificar si $GLOBALS[variable2] es primo ". "\n";
        echo "5. Verificar si $GLOBALS[variable3] es par ". "\n";
        echo "6. Mostrar tabla de multiplicar del $GLOBALS[variable4] ". "\n";

        echo "Seleccione una opción (1-6): ";
        fscanf(STDIN, "%d", $x);
        switch ($x) {


            case 1:
                tablaMultiplicar(4);
                break;
            case 2:
                tablaMultiplicar(6);
                break;
            case 3:
                factorial($GLOBALS['variable1']);
                break;
            case 4:
                esPrimo($GLOBALS['variable2']);
                break;
            case 5:
                esPar($GLOBALS['variable3']);
                break;
            case 6:
                tablaMultiplicar($GLOBALS['variable4']);
                break;
            default:
                echo "Opción no válida ";

        }
    }while($x!=0);
}

main();



