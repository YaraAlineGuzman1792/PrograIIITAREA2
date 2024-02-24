<?php

function calcular_edad($fecha_nacimiento) {
    $fecha_actual = new DateTime();
    $edad = $fecha_actual->diff($fecha_nacimiento)->y;
    return $edad;
}

function mayor_de_dos_numeros($primerNumero, $segundoNumero) {
    if ($primerNumero > $segundoNumero) {
        return $primerNumero;
    } elseif ($segundoNumero > $primerNumero) {
        return $segundoNumero;
    } else {
        return "Ambos números son iguales";
    }
}

function par_o_impar($numeroSeleccionado) {
    if ($numeroSeleccionado % 2 == 0) {
        return "par";
    } else {
        return "impar";
    }
}

function factorial($numeroBase) {
    $factorial = 1;
    for ($i = 1; $i <= $numeroBase; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

function ordenar_numeros() {
    $numeros = [];
    for ($i = 0; $i < 20; $i++) {
        $numeros[] = rand(1, 100);
    }
    rsort($numeros);
    return $numeros;
}

function mostrar_alumnos() {
    $alumnos = array(
        array('alumno' => 'Juan', 'curso' => 'Matemáticas', 'nota' => '85'),
        array('alumno' => 'María', 'curso' => 'Historia', 'nota' => '78'),
        array('alumno' => 'Pedro', 'curso' => 'Ciencias', 'nota' => '92'),
        array('alumno' => 'Ana', 'curso' => 'Literatura', 'nota' => '88'),
        array('alumno' => 'Luis', 'curso' => 'Inglés', 'nota' => '95'),
        array('alumno' => 'Laura', 'curso' => 'Geografía', 'nota' => '70'),
        array('alumno' => 'Carlos', 'curso' => 'Arte', 'nota' => '82'),
        array('alumno' => 'Sofía', 'curso' => 'Física', 'nota' => '90'),
        array('alumno' => 'Diego', 'curso' => 'Química', 'nota' => '76'),
        array('alumno' => 'Elena', 'curso' => 'Biología', 'nota' => '84')
    );

    foreach ($alumnos as $alumno) {
        echo "Nombre: " . $alumno['alumno'] . "\n";
        echo "Curso: " . $alumno['curso'] . "\n";
        echo "Nota: " . $alumno['nota'] . "\n\n";
    }
}


function main()
{
    $x = 1;

    do {
        echo "Ingrese la opción deseada: ";

        echo "1. Calcular edad\n";
        echo "2. Mayor de dos números\n";
        echo "3. Par o impar\n";
        echo "4. Factorial de un número\n";
        echo "5. Ordenar números\n";
        echo "6. Mostrar alumnos\n";
        echo "0. Salir\n";
        fscanf(STDIN, "%d", $x);
        switch ($x) {
            case 1:
                $fecha_nacimiento = new DateTime('1990-05-15'); // Ejemplo de fecha de nacimiento
                $edad = calcular_edad($fecha_nacimiento);
                echo "La edad es: $edad\n";
                break;
            case 2:
                echo "Ingrese el primer número: ";
                $primerNumero = intval(fgets(STDIN));
                echo "Ingrese el segundo número: ";
                $segundoNumero = intval(fgets(STDIN));
                echo "El mayor de los dos números es: " . mayor_de_dos_numeros($primerNumero, $segundoNumero) . "\n";
                break;
            case 3:
                echo "Ingrese un número: ";
                $numeroSeleccionado = intval(fgets(STDIN));
                echo "El número ingresado es " . par_o_impar($numeroSeleccionado) . "\n";
                break;
            case 4:
                echo "Ingrese un número para calcular su factorial: ";
                $numeroBase = intval(fgets(STDIN));
                echo "El factorial de $numeroBase es: " . factorial($numeroBase) . "\n";
                break;
            case 5:
                echo "Números ordenados de mayor a menor: " . implode(", ", ordenar_numeros()) . "\n";
                break;
            case 6:
                mostrar_alumnos();
                break;
            case 0:
                echo "¡Hasta luego!\n";
                break;
            default:
                echo "Opción inválida. Intente de nuevo.\n";
                break;
        }
    }while($x!=0);
}
        main();
