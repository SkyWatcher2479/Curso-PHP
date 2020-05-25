<?php

// Ciclo For
//  $i = 0  : valor de inicio
//  $i < 10 : condicional - valor de parada
//  $i++ : valor de incremento

    for ($i = 1; $i <= 10; $i++)
    {
        echo "$i ";
    }

    echo "<br> <br>";
    
    for ($a = 2; $a <= 20; $a += 2)
    {
        echo "$a ";
    }

    echo "<br> <br>";

    for ($b = 20; $b >= 2; $b -= 2)
    {
        echo "$b ";
    }

    echo "<br> <br>";

// Desarrollar un programa que permita contar cuantos numeros entre 1 y 1000 son multiplos de 7

    $multiplos = 0;

    for ($c = 1; $c <= 1000; $c++)
    {
        if ($c % 7 == 0)
        {
            $multiplos++;
        }
    }

    echo "La cantidad de multiplos de 7 es $multiplos";

    echo "<br>";

// Desarrollar un programa que imprima las tablas de multiplicar del 1 al 2 con su respectivo resultado

    for ($d = 1; $d <= 2; $d++)
    {
        echo "<br> Tabla de multiplicar del $d <br>";

        for ($e = 1; $e <= 10; $e++)
        {
            echo "$d X $e = ".$d * $e. "<br>";
        }
    }
?>