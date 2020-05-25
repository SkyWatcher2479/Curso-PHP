<?php

    if (25 > 6*1)
    {
        echo "Excelente, la condicional es verdadera";
    }
    else
    {
        echo "Ups, la condicional es falsa";
    }

    echo "<br>";
    echo "<br>";

    $pregunta1 = "Si";
    $pregunta2 = "No";

    echo "Pregunta: ¿A Alejo le gusta escuchar canciones de Arctic Monkeys?";
    echo "<br>";
    echo "Respuesta: $pregunta1";
    echo "<br>";

    if ($pregunta1 == "Si")
    {
        echo "Pregunta: ¿Tambien le gusta escuchar canciondes de DEAD SONS?";
        echo "<br>";
        echo "Respuesta: $pregunta1";
        echo "<br>";

        if ($pregunta1 == "Si")
        {
            echo "¡VAYA! si que conoces a Alejo";
        }
        else
        {
            echo "No conoces todos sus gustos musicales";
        }
    }
    else
    {
        echo "Debes conocer más a Alejo";
    }


?>