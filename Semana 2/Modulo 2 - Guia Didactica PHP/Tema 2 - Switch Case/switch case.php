<?php

    $x = 1;

    switch ($x)
    {
        case 0:
            echo "x es igual a 0";
            break;
        case 1:
            echo "x es igual a 1";
            break;
        case 2:
            echo "x es igual 2";
            break;
    }

    echo "<br>";
    echo "<br>";

    $numero = 3;

    switch ($numero)
    {
        case 0:
            echo "El numero es 0 ";
        case 3:
            echo "El numero es 3 ";
        case 6:
            echo "El numero es 6 ";
        case 9:
            echo "EL numero es 9 ";
    }

    echo "<br>";
    echo "<br>";

    $fruta = "Mora";

    switch ($fruta)
    {
        case "Coco":
            echo "La fruta es un coco";
            break;

        case "Mora":
            echo "La fruta es una Mora";
            break;

        case "Banano":
            echo "La fruta es un banano";
            break;
    }

    echo "<br>";
    echo "<br>";

    $number = 1;

    switch ($number)
    {
        case 1:
            echo "Caso 1 ";
        case 2:
            echo "Caso 2 ";
            break;

        case 3:
            echo "Caso 3 ";
            break;
    }

    echo "<br>";
    echo "<br>";
    
    // Switch Case con Default

    $diasemana = "Sabado";
    $mensaje = "mensaje";

    switch ($diasemana)
    {
        case "Lunes";
        case "Martes";
        case "Miercoles";
        case "Jueves";
        case "Viernes";
            $mensaje = "dia laborable";
            break;
        
        case "Sabado";
        case "Domingo";
            $mensaje = "dia de descanso";
            break;

        default:
            $mensaje = "dia invalido";
    }

    echo "$diasemana es un $mensaje";

    echo "<br>";
    echo "<br>";

    $a = 8;
    $b = 4;

    $operacion = "/";

    switch ($operacion)
    {
        case "+":
            $suma = $a + $b;
            echo "El resultado de la suma es: $suma";
            break;

        case "-":
            $resta = $a - $b;
            echo "El resultado de la resta es: $resta";
            break;

        case "*":
            $multiplicacion = $a * $b;
            echo "El resultado de la multiplicacion es: $multiplicacion";
            break;
        
        case "/":
            $division = $a / $b;
            echo "El resultado de la division es: $division";
            break;

        default:
            echo "La operacion no es valida";
    }

?>